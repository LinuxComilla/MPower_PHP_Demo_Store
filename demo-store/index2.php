<?php
session_start();

if (isset($_GET['reset'])) {
  $_SESSION["cart"] = array();
}

if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = array();
}

// We simply add an array of the product details into our cart session.
function addProducts($name,$quantity,$unit_price) {
  $_SESSION["cart"][] = array(
    'name' => $name,
    'quantity' => $quantity,
    'unit_price' => $unit_price,
    'total_price' => $quantity*$unit_price
  );
}

if (isset($_POST['cartpush'])) {
  addProducts($_POST['name'],$_POST['quantity'],$_POST['price']);
}

?>
<html>
<head>
  <title>Awesome Online Store</title>
  <style type="text/css">
    body{
      background-color: #272727;
      font-family: Arial;
      font-size: 14px;
    }
    h1{
      font-weight: 500;
    }
    .container{
      margin:60px auto 0 auto;
      width:600px;
      min-height: 400px;
      background-color: #fafafa;
      border: 1px solid #e4e4e4;
      padding: 15px 30px;
    }
    input[type="text"]{
      padding:4px;
      display: block;
      width:300px;
      margin-bottom: 8px;
    }
    table{
      width:100%;
      margin-bottom: 50px;
    }
    th{
      background: #282828;
      color:#fff;
      text-align: left;
      padding:8px;
      font-weight: 300;
      font-size: 13px;
    }
    td{
      padding:8px;
      font-size: 13px;
      border-bottom: 1px solid #e4e4e4;
    }
    .checkout{
      background: #2c8211;
      padding:10px;
      font-size: 16px;
      font-weight: bold;
      color:#fff;
    }
  </style>
</head>
<body>
<div class="container"><h1>Awesome Online Store</h1>
<table cellspacing="0" cellpadding="0">
<tr>
<th>Product Name</th>
<th>Quantity</th>
<th>Unit Price</th>
<th>Total Price</th>
</tr>
<?php
foreach ($_SESSION["cart"] as $product) {
  echo "<tr><td>".$product["name"]."</td><td>".$product["quantity"]."</td><td>".$product["unit_price"]."</td><td>".$product["total_price"]."</td></tr>";
}
?>
</table>
<form method="post" action="index.php">
<input type="text" name="name" placeholder="Name of Product" value="A Pair of chalewote slippers">
<input type="text" name="quantity" placeholder="1" value="1">
<input type="text" name="price" placeholder="20.99" value="50.99">
<input type="hidden" value="ok" name="cartpush">
<input type="submit" value="Add Product"> <a href="?reset=ok">Reset Session</a>
</form>
<?php if (count($_SESSION["cart"]) > 0) { ?>
<br>
<br>
<hr/>
<form method="post" action="onsite_checkout.php">
<input type="hidden" value="ok" name="checkout">
<label for="account_alias">Account Alias (Username or Phone)</label>
<input type="text" name="account_alias" value="" placeholder="Customer Account Alias">
<input type="submit" value="Onsite Checkout With MPower" class="checkout"> or <a href="index.php" title="Onsite Redirect">Redirect Checkout with MPower</a>
</form>
<?php } ?>
</div>
</body>
</html>