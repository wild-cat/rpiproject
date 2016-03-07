<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoLeft.php
 * @author GL
 * 2016-03-05
 *
 */

	system ("gpio -1 mode ".$_GET['servoPin']." pwm");
	system ("gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000");
	system ("gpio -1 pwm ".$_GET['servoPin']." 25");

	/* 25 is minimum value with these options */

?>
