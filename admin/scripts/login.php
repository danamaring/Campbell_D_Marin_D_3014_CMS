<?php
date_default_timezone_set('America/Toronto');
function login($username, $password){
    $pdo = Database::getInstance()->getConnection();
    //check existance
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_name= :username';
    //prevent a sql injection
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':username' => $username,
        )
    );

    if($user_set->fetchColumn()>0){
        //user exists
        $get_user_query = 'SELECT * FROM tbl_user WHERE user_name = :username';
        $get_user_query .= ' AND user_pass = :password';
        $user_check = $pdo->prepare($get_user_query);
        $user_check->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
        );

        // if($user_check['expiring_date']<date('Y-m-d H:i:s')){
        //     echo "Your account is expired... Please contact the admin.";
        // }

        while($found_user = $user_check->fetch(PDO::FETCH_ASSOC)){            
            $id = $found_user['user_id'];
            //Logged in!
            $message = 'You just logged in';
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $found_user['user_fname'];
            
            $update_query = "UPDATE tbl_user SET user_date = :date WHERE user_id = :id";
            $update_set = $pdo->prepare($update_query);
            $result = $update_set->execute(
                array(
                    ':date'=>date('Y-m-d H:i:s'),
                    ':id'=>$id
                )
            );

            if (!$result){
                print_r($update_set->errorInfo());
                exit;
            }

            // if(isset($id)){
            //     redirect_to('index.php');
            // }
            if ($found_user['user_date'] === null) {
                redirect_to('admin_edituser.php');
            } else {
                redirect_to('index.php');
            }
        }
    }
    // else{
    //     //User doesnt exists
    //     $message = 'User doesnt exist';
    // }

    //log user in
    return $message;
}

function confirm_logged_in(){
    if(!isset($_SESSION['user_id'])){
        redirect_to('admin_login.php');
    }
}

function logout(){
    session_destroy();
    redirect_to('admin_login.php');
}