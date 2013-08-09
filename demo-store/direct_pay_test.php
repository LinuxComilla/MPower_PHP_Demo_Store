<?php

require('mpower_php/mpower.php'); // Make sure the client library is relative to your path

MPower_Setup::setMasterKey("dd6f2c90-f075-012f-5b69-00155d866600");
MPower_Setup::setPublicKey("live_public_DP2tNf1X2NHWIE4EN1Ep3FCPKXc");
MPower_Setup::setPrivateKey("live_private_HSJ-DYh7jdiqnqIvDW_X3F4kE8k");
MPower_Setup::setMode("live");
MPower_Setup::setToken("e179a0d8f07ef0078e38");

$direct_pay = new MPower_DirectPay();

if ($direct_pay->creditAccount("0244124660",70.65)) {
  print $direct_pay->description;
  print $direct_pay->response_text;
  print $direct_pay->transaction_id;
}else{
  print $direct_pay->response_text;
}