<?php
    require_once '../load.php';
    confirm_logged_in();

    $users = getAllusers();
    if(!$users){
        $message = 'Faild to get user list';
    }

    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $delete_result = deleteUser($user_id);

        if(!delete_result){
            $message = 'Failed to delete user';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Users</title>
</head>
<body>
<h2>DELETE USERS</h2>
<?php echo !empty($message)?$message:'';?>
    <table>
        <thead>
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>USER EMAIL</th>
            <th>DELETE USER</th>
        </thead>
        <tbody>
        <?php while($user = $users->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $user['user_id'];?></td>
                <td><?php echo $user['user_name'];?></td>
                <td><?php echo $user['user_email'];?></td>
                <td><a href="admin_deleteuser.php?id=<?php echo $user['user_id'];?>">Delete User</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>