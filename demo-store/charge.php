<?php
require('mpower_php/mpower.php');
require('conf.php');

$co = new MPower_Onsite_Invoice();

// Pass the account alias as a create function parameter
if($co->charge($_POST["opr_token"],$_POST["confirmation_code"])) {
  echo $co->response_text;
  echo "<br/> Reciept Link <a href=\"".$co->getReceiptUrl()."\">Download</a>";
}else{
  echo($co->response_text);
}
?>
<br/>
<br/>
<a href="index2.php?reset=ok" title="">Back to Cart page</a>

