<?php
    require_once '../load.php';
    confirm_logged_in();

    $products = getAllproducts();
    if(!$products){
        $message = 'Faild to get products list';
    }

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $delete_result = deleteProduct($product_id);

        if(!delete_result){
            $message = 'Failed to delete product';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Products</title>
</head>
<body>
<h2>DELETE PRODUCTS</h2>
<?php echo !empty($message)?$message:'';?>
    <table>
        <thead>
            <th>PRODUCT ID</th>
            <th>PRODUCT IMAGE</th>
            <th>PRODUCT NAME</th>
            <th>PRODUCT PRICE</th>
            <th>PRODUCT DESCRIPTION</th>
            <th>DELETE PRODUCT</th>
        </thead>
        <tbody>
        <?php while($product = $products->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $product['product_id'];?></td>
                <td><?php echo $product['product_image'];?></td>
                <td><?php echo $product['product_name'];?></td>
                <td><?php echo $product['product_price'];?></td>
                <td><?php echo $product['product_description'];?></td>
                <td><a href="admin_deleteproduct.php?id=<?php echo $product['product_id'];?>">Delete Product</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>