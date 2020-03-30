<?php
    require_once '../load.php';
    confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['user_name'];?>!</h1>
    <h3>USERS</h3>
    <a href="admin_createuser.php">Create User</a> <br><br>
    <a href="admin_edituser.php">Edit User</a> <br><br>
    <a href="admin_deleteuser.php">Delete User</a> <br><br>

    <h3>PRODUCTS</h3>
    <a href="admin_addproduct.php">Add a Product</a> <br><br>
    <a href="admin_editproduct.php">Edit a Product</a> <br><br>
    <a href="admin_deleteproduct.php">Delete a Product</a> <br><br>

    <h3>ACCOUNT</h3>
    <a href="admin_logout.php">Sign Out</a> <br><br>



</body>
</html>