<?php
include("../res/x5engine.php");
$nameList = array("2k2","kvh","jch","j4k","yac","5yl","dle","vh3","yjg","7gz");
$charList = array("P","J","K","V","8","D","J","6","R","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
