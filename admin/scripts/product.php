<?php

function addProduct($product){
    try {
        //Connect to the DB
        $pdo = Database::getInstance()->getConnection();

        // 2. Validate the uploaded file
        $image = $product['image'];
        $upload_file = pathinfo($image['name']);
        $accepted_types = array('gif', 'jpg', 'jpe', 'png', 'jpeg', 'webp');
        if (!in_array($upload_file['extension'], $accepted_types)) {
            throw new Exception('Wrong file type!');
        }

        //3. Move the uploaded file around (move the file from tmp path to the /images folder)
        $image_path = '../images/';


        $generated_name = md5($upload_file['filename'].time());
        $generated_filename = $generated_name.'.'.$upload_file['extension'];
        $targetpath = $image_path.$generated_filename;

        if (!move_uploaded_file($image['tmp_name'], $targetpath)){
            throw new Exception('Failed to move uploaded file, check permissions!');
        }


        // 4. Insert into DB (tbl_products as well as tbl_products_sport)
        $insert_product_query = 'INSERT INTO tbl_products(product_image,product_name,product_price,product_description)';
        $insert_product_query .= ' VALUES (:product_image,:product_name,:product_price,:product_description)';

        $insert_product = $pdo->prepare($insert_product_query);
        $insert_product_result = $insert_product->execute(
            array(
                ':product_image'=>$generated_filename,
                ':product_name'=>$product['name'],
                ':product_price'=>$product['price'],
                ':product_description'=>$product['description'],
            )
        );

        $last_uploaded_id = $pdo->lastInsertId();
        if($insert_product_result && !empty($last_uploaded_id)){
            $update_sport_query = 'INSERT INTO tbl_products_sport(product_id, sport_id) VALUES(:product_id, :sport_id)';
            $update_sport = $pdo->prepare($update_sport_query);

            $update_sport_result = $update_sport->execute(
                array(
                    ':product_id'=>$last_uploaded_id,
                    ':sport_id'=>$product['sport'],
                )
            );
        }

        // 5. If all of above worked, redirect user to index.php

        redirect_to('index.php');
    } catch (Exception $e){
        //Otherwise, return some error message
        $error = $e->getMessage();
        return $error;
    }
}

function getAllproducts(){
    $pdo = Database::getinstance()->getConnection();

    $get_product_query = 'SELECT * FROM tbl_products';
    $product = $pdo->query($get_product_query);

    if($product){
        return $product;
    } else {
        return false;
    }
}

function deleteProduct($id){
    $pdo = Database::getInstance()->getConnection();
    $delete_product_query = 'DELETE FROM tbl_products WHERE tbl_products.product_id = :id;';
    $delete_product_set = $pdo->prepare($delete_product_query);
            $get_delete_result = $delete_product_set->execute(
                array(
                    ':id'=>$id
                )
            );
            if($get_delete_result && $delete_product_set->rowCount() > 0){
                redirect_to('admin_deleteproduct.php');
            }else{
                return false;
            }
}

function getProductByID($id){
    $pdo = Database::getInstance()->getConnection();
    //TODO: execute the proper SQL query to fetch the user data where user_id = $id

    //TODO: if the execution is successful, return the user data
    //Otherwise, return an error message
    $show_product_query = 'SELECT * FROM tbl_products WHERE product_id = :id';
    $show_product_set = $pdo->prepare($show_product_query);
            $get_product_result = $show_product_set->execute(
                array(
                    ':id'=>$id
                )
            );

            if($get_product_result){
                return $show_product_set;
            }else{
                return 'not working :(';
            }
}

function editProduct($id, $image, $name, $price, $description, $category){
    //TODO: set up database connection
    //TODO: Run the proper sql query to update tbl_user with proper values
    //TODO: if everything goes well, redirect user to index.php
    //Otherwise, return some error message.
    $pdo = Database::getInstance()->getConnection();
    $update_product_query = 'UPDATE tbl_products SET product_image = :image, product_name = :name, product_price = :price, product_description = :description WHERE product_id = :id';
    $update_product_set = $pdo->prepare($update_product_query);
            $get_product_result = $update_product_set->execute(
                array(
                    ':id'=>$id,
                    ':image'=>$image,
                    ':name'=>$name,
                    ':price'=>$price,
                    ':description'=>$description
                )
            );

            //----------->debug your sql query with:
            // echo $update_product_set->debugDumpParams();
            // exit;
    $last_uploaded_id = $pdo->lastInsertId();
    if($insert_product_result && !empty($last_uploaded_id)){
        $update_sport_query = 'INSERT INTO tbl_products_sport(product_id, sport_id) VALUES(:product_id, :sport_id)';
        $update_sport = $pdo->prepare($update_sport_query);

        $update_sport_result = $update_sport->execute(
            array(
                ':product_id'=>$last_uploaded_id,
                ':sport_id'=>$category,
            )
        );
    }

            if($get_product_result){
                redirect_to('index.php');
            }else{
                return 'not working :(';
            }

            //could be this other option
        //     redirect_to('index.php');
        // } catch (Exception $e){
        //     //Otherwise, return some error message
        //     $error = $e->getMessage();
        //     return $error;
}