<?php
    require_once '../load.php';
    confirm_logged_in();
    $getProduct = getSingleProduct($tbl, $col, $id); //maybe change this
    $sport_table = 'tbl_sport';
    $sport = getAll($sport_table);
    $id = $_GET['id'];


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tbl = 'tbl_products';
        $col = 'product_id';
        $getProduct = getSingleProduct($tbl, $col, $id);
    }

    if(isset($_GET['submit'])){
        // $id = $_GET['id'];

        $id = trim($_GET['id']);
        $image = trim($_GET['image']);
        $name = trim($_GET['name']);
        $price = trim($_GET['price']);
        $description = trim($_GET['description']);
        $category = trim($_GET['genList']);
        
        if(empty($image) || empty($name) || empty($price) || empty($description) || empty($category)){
            $message = 'Please fill the required fields';
        }else{
            $message = editProduct($id, $image, $name, $price, $description, $category);
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Single Product</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
    <h2>Edit Product</h2>
    <?php echo !empty($message)? $message : '';?>
    <form action="admin_singleproductedit.php" method="get">

        <?php while($info = $getProduct->fetch(PDO::FETCH_ASSOC)): ?>
        <label for="">Product ID:</label>
        <input type="text" name="id" value="<?php echo $info['product_id'];?>"><br><br>

        <label for="">Product image:</label>
        <input type="text" name="image" value="<?php echo $info['product_image'];?>"><br><br>

        <label for="">Product name:</label>
        <input type="text" name="name" value="<?php echo $info['product_name'];?>"><br><br>

        <label for="">Price:</label>
        <input type="text" name="price" value="<?php echo $info['product_price'];?>"><br><br>

        <label for="">Description:</label>
        <input type="text" name="description" value="<?php echo $info['product_description'];?>"><br><br>
        <?php endwhile; ?>

        <label>Sport:</label>
        <select name="genList">
            <option>Please select a category:</option>
            <?php while($row = $sport->fetch(PDO::FETCH_ASSOC)): ?>
            <option value="<?php echo $row['sport_id'] ?>"><?php echo $row['sport_name'];?></option>
            <?php endwhile; ?>
        </select>
        <br><br>

        <button type="submit" name="submit">Save Changes</button>
    </form>
</body>
</html>