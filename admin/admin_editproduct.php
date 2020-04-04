<?php
    require_once '../load.php';
    confirm_logged_in();

    $products = getAllproducts();
    if(!$products){
        $message = 'Faild to get products list';
    }

    // if (isset($_GET['id'])) {
    //     $id = $_GET['id'];
    //     $tbl = 'tbl_products';
    //     $col = 'product_id';
    //     $getProduct = getSingleProduct($tbl, $col, $id);
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
</head>
<body>
<h2>EDIT PRODUCTS</h2>
<?php echo !empty($message)?$message:'';?>
    <table>
        <thead>
            <th>PRODUCT ID</th>
            <th>PRODUCT IMAGE</th>
            <th>PRODUCT NAME</th>
            <th>PRODUCT PRICE</th>
            <th>PRODUCT DESCRIPTION</th>
            <th>EDIT PRODUCT</th>
        </thead>
        <tbody>
        <?php while($product = $products->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $product['product_id'];?></td>
                <td><?php echo $product['product_image'];?></td>
                <td><?php echo $product['product_name'];?></td>
                <td><?php echo $product['product_price'];?></td>
                <td><?php echo $product['product_description'];?></td>
                <td><a href="admin_singleproductedit.php?id=<?php echo $product['product_id'];?>">Edit Product</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>