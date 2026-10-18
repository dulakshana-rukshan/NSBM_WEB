
<?php

if (isset($_POST["calculate"])) {

    $name = $_POST["product_name"];
    $price = $_POST["uprice"];
    $quantity = $_POST["quantity"];

    $total = $price * $quantity;

    if ($total >= 5000) {
        $discount = $total * 0.10;
        $final_price = $total - $discount;
    } else {
        $discount = 0;
        $final_price = $total;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping system</title>

</head>
<body>
    <h1>Shopping system</h1>

    <form method="POST">
        <label>Product Name : </label>
        <input type="text" name="product_name"><br><br>

        <label>Unit Price :</label>
        <input type="number" name="uprice" min="1"><br><br>

        <label>Quantity :</label>
        <input type="number" min="1" name="quantity" > <br><br>

        <input type="submit" name="calculate" value="Calculate Price">
    </form>

  <?php

    if (isset($_POST["calculate"])) {

        echo "<h2>Shopping Details</h2>";

        echo "Product Name: " . htmlspecialchars($name) . "<br>";
        echo "Total Price: Rs. " . number_format($total, 2) . "<br>";
        echo "Discount: Rs. " . number_format($discount, 2) . "<br>";
        echo "Final Price: Rs. " . number_format($final_price, 2);
    }

    ?>
</body>
</html>