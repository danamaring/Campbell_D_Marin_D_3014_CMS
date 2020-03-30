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