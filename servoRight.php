<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoRight.php
 * @author GL
 * 2016-03-05
 */

	system ("gpio -1 mode ".$_GET['servoPin']." pwm");
	system ("gpio -1 pwm-ms && gpio pwmc 400 && gpio pwmr 1000");
	system ("gpio -1 pwm ".$_GET['servoPin']." 105");

	/* 105 is maximum value with these options */

?>
