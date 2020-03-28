<?php
require_once 'load.php';

if (isset($_GET['filter'])) {
    //Filter
    $args = array(
        'tbl' => 'tbl_products',
        'tbl2' => 'tbl_sport',
        'tbl3' => 'tbl_products_sport',
        'col' => 'product_id',
        'col2' => 'sport_id',
        'col3' => 'sport_name',
        'filter' => $_GET['filter'],
    );
    $getProduct = getProductByFilter($args);
} else {
    $product_table = 'tbl_products';
    $getProduct = getAll($product_table);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to the SportChek CMS!</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php include 'templates/header.php';?>
    <?php while ($row = $getProduct->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="product-item">
            <img src="images/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>" />
            <h2><?php echo $row['product_name']; ?></h2>
            <h4>Product Price: <?php echo $row['product_price']; ?></h4>
            <a href="details.php?id=<?php echo $row['product_id']; ?>">Read More...</a>
        </div>
    <?php endwhile;?>
    <?php include 'templates/footer.php';?>
</body>
</html>