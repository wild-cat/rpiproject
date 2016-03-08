<?php

/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoLeft.php
 * @author GL
 * 2016-03-05
 *
 */
	
	for ($i=25;$i<=65;$i++) {
		
		$cmd = "gpio -1 mode ".$_GET['servoPin']." pwm";
		system ($cmd);
		
		echo "SEND: ".$cmd." \r\n";
		
		$cmd = "gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000";
		system ($cmd);
		
		echo "SEND: ".$cmd." \r\n";
		
		$cmd = "gpio -1 pwm ".$_GET['servoPin']." ".$_GET['spin'];
		system ($cmd);
		
		echo "SEND: ".$cmd." \r\n";
		
		
		sleep(1000);
	}

 	/* 25 is minimum value with these options */

?>
