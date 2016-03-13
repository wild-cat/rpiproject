<?php

session_start();	

$_SESSION['servoBasicPosition']--;

if ($_SESSION['servoBasicPosition'] != 25) {
	

	$cmd = "gpio -1 pwm ".$_SESSION['servoPinBasic']." ".$_SESSION['servoBasicPosition'];
	system ($cmd);
	echo "CMD: ".$cmd;
	
} else {
	
	echo "Maxium spin reached!";
	
}



?>