<?php
/*
 * Project RPi Turret
 * 
 * This is the main page of the servo Controller
 *
 * @author GL
 * 2016-03-07
 *
 */

session_start();

$_SESSION['servoPinBasic'] = 12;
$_SESSION['servoPinCont'] = 33;
$_SESSION['servoBasicPosition'] = 0;
$_SESSION['spin'] = 0;

include "config.php";


?><!DOCTYPE html>
<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Basic Servo Controller</title>

		<script src="jquery-1.12.1.min.js"></script>
		<script src="ajaxBasic.js"></script>
		<script src="ajaxCont.js"></script>

	</head>

	<body>
	Basic Servo<br>
		<button type="button" id="clickLeft">LEFT</button>
		<button type="button" id="clickMiddle">CENTER</button>
		<button type="button" id="clickRight">RIGHT</button><br>
	Basic Servo with coninuous approch<br>
		<button type="button" id="basicServoLeftCont"><</button>
		<button type="button" id="basicServoRightCont">></button><br>
	Continues Servo<br>
		<button type="button" id="contServoLeft"><</button>
		<button type="button" id="contServoRight">></button><br>

		<div id='debug'>
		</div>
	</body>

</html>
