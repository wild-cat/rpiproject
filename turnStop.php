<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoLeft.php
 * @author GL
 * 2016-03-07
 *
 */

	/*system ("gpio -1 mode ".$_GET['csPin']." pwm");
	system ("gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000");*/

	system ("gpio -1 pwm ".$_GET['csPin']." 71");

	/* 71 is a neutral value : the servo does nothing */

?>
