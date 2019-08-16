<?php
include("../res/x5engine.php");
$nameList = array("38h","vkt","gyw","l2w","xwv","vud","rdu","pr3","ccm","tax");
$charList = array("Z","X","Y","C","M","N","K","U","3","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
