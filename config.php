<?php
/*
 * Project RPi Turret
 *
 * PHP file for testing Servo activation in a web browser : servoLeft.php
 * @author GL
 * 2016-03-05
 * 
 * This is a simple config file
 *
 */

//setup the servos to make them spin
system ("gpio -1 mode ".$_SESSION['servoPinBasic']." pwm");
system ("gpio -1 mode ".$_SESSION['servoPinCont']." pwm");

//setup the pin for fire button
system ("gpio -1 mode ".$_SESSION['firePin']." out");

//init the servos
system ("gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000");

//init de basic servo to 'center' position
system ("gpio -1 pwm ".$_SESSION['servoPinBasic']." 65");




?>