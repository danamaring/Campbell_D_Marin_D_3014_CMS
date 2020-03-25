<?php
function createUser($fname, $username, $password, $email){
    $pdo = Database::getInstance()->getConnection();

    //TODO: finish the below so that it can run a SQL query
    // to create a new user with provided data
    $create_user_query = 'INSERT INTO tbl_user (user_id, user_fname, user_name, user_pass, user_email, user_date, expiring_date) VALUES (NULL, :fname, :username, :password, :email, NULL, :expiring_date);';
    $create_user_set = $pdo->prepare($create_user_query);
            $create_user_set->execute(
                array(
                    ':fname'=>$fname,
                    ':username'=>$username,
                    ':password'=>$password,
                    ':email'=>$email,
                    ':expiring_date'=>date("Y-m-d H:i:s", strtotime("+1 hours"))
                )
            );

            if($create_user_set){
                // $sender = 'someone@somedomain.com';
                // $to      = 'dana.mgasdfgh@gmail.com';

                // $subject = 'this is a subject';
                // $message = 'hello $username';
                // $headers = 'From:' . $sender;

                // $sentMail = mail ($to, $subject, $message, $headers);
         
                // if( $sentMail == true ) {
                //     echo "Message sent successfully...";
                // }else {
                //     echo "Message could not be sent...";
                // }
                
                redirect_to('index.php');
            }else{
                return 'The user did not get through';
            }

            //if you ever need to test the 'else' message, add a ! before the $create_user_set to revert the statement
}

function getSingleUser($id){
    $pdo = Database::getInstance()->getConnection();
    //TODO: execute the proper SQL query to fetch the user data where user_id = $id

    //TODO: if the execution is successful, return the user data
    //Otherwise, return an error message
    $show_user_query = 'SELECT * FROM tbl_user WHERE user_id = :id';
    $show_user_set = $pdo->prepare($show_user_query);
            $get_user_result = $show_user_set->execute(
                array(
                    ':id'=>$id
                )
            );

            if($get_user_result){
                return $show_user_set;
            }else{
                return 'not working :(';
            }
}

function getAllusers(){
    $pdo = Database::getinstance()->getConnection();

    $get_user_query = 'SELECT * FROM tbl_user';
    $users = $pdo->query($get_user_query);

    if($users){
        return $users;
    } else {
        return false;
    }
}

//PHP_EOL (line break. don't use enter)
function editUser($id, $fname, $username, $password, $email){
    //TODO: set up database connection
    //TODO: Run the proper sql query to update tbl_user with proper values
    //TODO: if everything goes well, redirect user to index.php
    //Otherwise, return some error message.
    $pdo = Database::getInstance()->getConnection();
    $update_user_query = 'UPDATE tbl_user SET user_fname = :fname, user_name = :username, user_pass = :password, user_email = :email WHERE user_id = :id';
    $update_user_set = $pdo->prepare($update_user_query);
            $get_update_result = $update_user_set->execute(
                array(
                    ':id'=>$id,
                    ':fname'=>$fname,
                    ':username'=>$username,
                    ':password'=>$password,
                    ':email'=>$email
                )
            );

            //----------->debug your sql query with:
            //echo $update_user_set->debugDumpParams();
            //exit;

            if($get_update_result){
                redirect_to('index.php');
            }else{
                return 'not working :(';
            }
}

function deleteUser($id){
    //TODO: Finish the function to delete the given user
    //
    $pdo = Database::getInstance()->getConnection();
    $delete_user_query = 'DELETE FROM tbl_user WHERE tbl_user.user_id = :id;';
    $delete_user_set = $pdo->prepare($delete_user_query);
            $get_delete_result = $delete_user_set->execute(
                array(
                    ':id'=>$id
                )
            );
    //If everything goes through, redirect to admin_deleteuser.php
    //Otherwise, return false
            if($get_delete_result && $delete_user_set->rowCount() > 0){
                redirect_to('admin_deleteuser.php');
            }else{
                return false;
            }
}