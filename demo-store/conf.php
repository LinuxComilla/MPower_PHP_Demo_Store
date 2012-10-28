<?php
MPower_Setup::setMasterKey("YOUR_API_MASTER_KEY");
MPower_Setup::setPublicKey("YOUR_API_PUBLIC_KEY");
MPower_Setup::setPrivateKey("YOUR_API_PRIVATE_KEY");
MPower_Setup::setMode("test");
MPower_Setup::setToken("YOUR_API_TOKEN");

// Configure Checkout Store
MPower_Checkout_Store::setName("Awesome Online Store");
MPower_Checkout_Store::setTagline("Awesome localhost.localdomain online store tagline ");
MPower_Checkout_Store::setPhoneNumber("0244000001");
MPower_Checkout_Store::setPostalAddress("P. O. Box AN 1010. Accra - Ghana.");

// You may set this to your localhost for local testing of redirects
// MPower_Checkout_Store::setCancelUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/index.php");
// MPower_Checkout_Store::setReturnUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/confirm.php");