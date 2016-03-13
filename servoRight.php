<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoRight.php
 * @author GL
 * 2016-03-05
 */

// 	system ("gpio -1 mode ".$_GET['servoPin']." pwm");
// 	system ("gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000");
	session_start();
	$cmd = "gpio -1 pwm ".$_SESSION['servoPinBasic']." 105";
	system ($cmd);
	echo "CMD: ".$cmd;
	
	$_SESSION['servoBasicPosition'] = 105;
1
	/* 105 is maximum value with these options */

?>
