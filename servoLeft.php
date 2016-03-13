<?php

session_start();



/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoLeft.php
 * @author GL
 * 2016-03-05
 *
 */
$cmd = "gpio -1 pwm ".$_SESSION['servoPinBasic']." 25";
system ($cmd);
echo "CMD: ".$cmd;

$_SESSION['servoBasicPosition'] = 25;

/* 105 is maximum value with these options */
 
//  if ($_SESSION['spin'] != 25) {
	 
// 	 $cmd = "gpio -1 mode ".$_GET['servoPin']." pwm";
//      system ($cmd);
//  	 $cmd = "gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000";
// 	 system ($cmd);
// 	 $cmd = "gpio -1 pwm ".$_GET['servoPin']." 25";
// 	 system ($cmd);
	 
//  }
 
//  sleep(5);
 
	
// 	for ($i=1;$i<=5;$i++) {
		
// 		$cmd = "gpio -1 mode ".$_GET['servoPin']." pwm";
// 		system ($cmd);
		
// 		echo "SEND: ".$cmd;
		
// 		$cmd = "gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000";
// 		system ($cmd);
		
// 		echo "SEND: ".$cmd;
		
// 		$cmd = "gpio -1 pwm ".$_GET['servoPin']." ".(25+($i*3));
// 		system ($cmd);
		
// 		echo "SEND: ".$cmd;
		
// 		sleep(1);
		
// 	}
	
	
// 	$_SESSION['spin'] = $i;

 	/* 25 is minimum value with these options */

?>
