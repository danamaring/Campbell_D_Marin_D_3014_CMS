<?php
require_once '../load.php';
confirm_logged_in();


if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    if(empty($email) || empty($password) || empty($username) || empty($fname)){
        $message = 'Please fill the required fields';
    }else{
        $message = createUser($fname, $username, $password, $email);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2>
    <?php echo !empty($message)? $message: ''; ?>
    <form action="admin_createuser.php" method="post">
        <label for="">First Name</label>
        <input type="text" name="fname" value=""><br><br>

        <label for="">Username</label>
        <input type="text" name="username" value=""><br><br>

        <label for="">Password</label>
        <input type="text" name="password" value=""><br><br>

        <label for="">Email</label>
        <input type="email" name="email" value=""><br><br>
        <button name="submit">Submit</button>
    </form>
</body>
</html>