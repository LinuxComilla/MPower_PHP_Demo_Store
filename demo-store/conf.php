<?php
MPower_Setup::setMasterKey("82403450-ee3a-4c57-9564-a8fbe30c5fb7");
MPower_Setup::setPublicKey("test_public_M6-fRS1RCnzlGqgeLaBF5vLLoKs");
MPower_Setup::setPrivateKey("test_private_jKxSnaylcQdrQcuxAOFAbxvK5w4");
MPower_Setup::setMode("test");
MPower_Setup::setToken("7f6c81c1ea223674416e");

// Configure Checkout Store
MPower_Checkout_Store::setName("Awesome Online Store");
MPower_Checkout_Store::setTagline("Awesome localhost.localdomain online store tagline ");
MPower_Checkout_Store::setPhoneNumber("0244000001");
MPower_Checkout_Store::setPostalAddress("P. O. Box AN 1010. Accra - Ghana.");

// You may set this to your localhost for local testing of redirects
// MPower_Checkout_Store::setCancelUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/index.php");
// MPower_Checkout_Store::setReturnUrl("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/confirm.php");