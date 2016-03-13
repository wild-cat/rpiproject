<?php

session_start();	

print_r($_SESSION);

if ($_SESSION['servoBasicPosition'] >= 25) {
	
	$_SESSION['servoBasicPosition']--;

	$cmd = "gpio -1 pwm ".$_SESSION['servoPinBasic']." ".$_SESSION['servoBasicPosition'];
	system ($cmd);
	echo "CMD: ".$cmd;
	
} else {
	
	echo "Minimum spin reached!";
	
}



?>