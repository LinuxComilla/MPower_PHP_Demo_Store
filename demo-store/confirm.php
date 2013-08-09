<?php
require('conf.php');

$co = new MPower_Checkout_Invoice();
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
    .success {
      padding:8px;
      background-color: #067416;
      color:#ffffff;
    }
    .fail {
      padding:8px;
      background-color: #920b00;
      color:#ffffff;
    }
  </style>
</head>
<body>
<div class="container"><h1>Checkout Confirmation</h1>
<?php
// The confirm method simply returns true or false depending of payment status.
// You may use this in an if else statatment to leverage the experience at your end
if ($co->confirm()) { ?>
  <div class="success">This invoice has been paid</div>
  <p><strong>Customer Name:</strong> <?php print $co->getCustomerInfo('name'); ?></p>
  <p><strong>Customer Email:</strong> <?php print $co->getCustomerInfo('email'); ?></p>
  <p><strong>Customer Phone:</strong> <?php print $co->getCustomerInfo('phone'); ?></p>
  <p><a href="<?php print $co->getReceiptUrl(); ?>" target="_blank">Download your receipt</a></p>
<?php
  }else{
  print '<div class="fail">Invoice Unpaid: '.$co->response_text.'</div>';
}
?>
</div>
</body>
</html>