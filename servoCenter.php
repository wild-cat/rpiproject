<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoCenter.php
 * @author GL
 * 2016-03-05
 *
 */

// 	system ("gpio -1 mode ".$_GET['servoPin']." pwm");
// 	system ("gpio -1 pwm-ms && gpio pwmc 400 && gpio pwmr 1000");
session_start();
$cmd = "gpio -1 pwm ".$_SESSION['servoPinBasic']." 65";
system ($cmd);
echo "CMD: ".$cmd;

$_SESSION['servoBasicPosition'] = 65;

	/* 65 is the medium value with these options */

?>
