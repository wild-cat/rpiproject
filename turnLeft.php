<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoLeft.php
 * @author GL
 * 2016-03-07
 *
 */

// 	system ("gpio -1 mode ".$_GET['csPin']." pwm");
// 	system ("gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000");
session_start();
	system ("gpio -1 pwm ".$_SESSION['servoPinCont']." 68");

	/* 68 is a value near 71-72 which are the "non-moving" values with these options */

?>
