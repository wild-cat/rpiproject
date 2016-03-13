<?php

session_start();	


if ($_SESSION['servoBasicPosition'] <= 105) {
	
	$_SESSION['servoBasicPosition']++;

	$cmd = "gpio -1 pwm ".$_SESSION['servoPinBasic']." ".$_SESSION['servoBasicPosition'];
	system ($cmd);
	echo "CMD: ".$cmd;
	
} else {
	
	echo "Maxium spin reached!";
	
}



?>