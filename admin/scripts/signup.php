<?php

// function signup($fname, $username, $password, $email) {
    
//     $pdo = Database::getInstance()->getConnection();

//     $user_exist = 'SELECT COUNT(*) FROM `tbl_user` WHERE user_email = :email';
//     $user_set = $pdo->prepare($user_exist);
//     $user_set ->execute(
//         array(
//             ':email'=>$email
//         )
//     );

//     if($user_set->fetchColumn()>0) {
//         // $update_date_set = 'UPDATE `tbl_user` SET user_last_update = :update_date WHERE user_email = :email' ;
//         // $user_update = $pdo->prepare($update_date_set);
//         //     $user_update->execute(
//         //         array(
//         //             ':update_date'=>$update_date,
//         //             ':email'=>$email
//         //         )
//         //     );
            
//             //sending email to returning subscriber
//             $headers = array(
//                 'From' => 'noreply@test.ca',
//                 'Reply-To' => $fname.'<'.$email.'>'
//             );
//             $to = $email;
//             $subject = "Thanks for subscribing";
//             $msg = "Hello, $fname Thanks for susbscribing!";

//             if(mail($to, $subject, $msg, $headers)) {
//                 echo '<p> Thanks for subscribing, '.$fname.'</p>';
//             } else {
//                 echo '<p> Your message did not go through... Sorry!</p>';
//             }
//             // while($existuser = $user_update->fetch(PDO::FETCH_ASSOC)) {
                
//             // }
//     } elseif($user_set->fetchColumn() == 0) {
//         $create_user_query = 'INSERT INTO tbl_user (user_id, user_fname, user_name, user_pass, user_email, user_date) VALUES (NULL, :fname, :username, :password, :email, CURRENT_TIMESTAMP);';
//         $create_user_set = $pdo->prepare($create_user_query);
//             $create_user_set->execute(
//                 array(
//                     ':fname'=>$fname,
//                     ':username'=>$username,
//                     ':password'=>$password,
//                     ':email'=>$email
//                 )
//             );

//             //sending email to first time subscriber
//             $headers = array(
//                 'From' => 'noreply@test.ca',
//                 'Reply-To' => $fname.'<'.$email.'>'
//             );
//             $subj = "Thanks for subs";
//             $msgs = "Hi new user: $username";
//             if(mail($email, $subj, $msgs, $headers)) {
//                 echo '<p> Thanks for contacting us, '.$fname.'</p>';
//             } else {
//                 echo '<p> We are sorry but your email did not go through</p>';
//             }

//     } else {
//         return "Something is Wrong Here!";
//     }  
// }