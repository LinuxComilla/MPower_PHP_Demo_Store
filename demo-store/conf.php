<?php
require('mpower_php/mpower.php');
MPower_Setup::setMasterKey("dd6f2c90-f075-012f-5b69-00155d866600");
MPower_Setup::setPublicKey("live_public_xDPNs0zAJ856YfC3z6rBwGsjqBA");
MPower_Setup::setPrivateKey("live_private_0mhrAda3hiiEfIirJYRC7w77moY");
MPower_Setup::setMode("live");
MPower_Setup::setToken("d13ab6c069296cfff556");

// Configure Checkout Store
MPower_Checkout_Store::setName("Awesome Online Store");
MPower_Checkout_Store::setTagline("Awesome localhost.localdomain online store tagline ");
MPower_Checkout_Store::setPhoneNumber("0244000001");
MPower_Checkout_Store::setPostalAddress("P. O. Box AN 1010. Accra - Ghana.");

// You may set this to your localhost for local testing of redirects
// MPower_Checkout_Store::setCancelUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/index.php");
// MPower_Checkout_Store::setReturnUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/confirm.php");