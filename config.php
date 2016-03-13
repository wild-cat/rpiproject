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

system ("gpio -1 mode ".$_SESSION['servoPinBasic']." pwm");
system ("gpio -1 mode ".$_SESSION['servoPinCont']." pwm");
system ("gpio -1 mode ".$_SESSION['firePin']." out");
system ("gpio pwm-ms && gpio pwmc 400 && gpio pwmr 1000");


?>