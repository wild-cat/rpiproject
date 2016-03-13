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

$_SESSION['servoPinBasic'] = 33;
$_SESSION['servoPinCont'] = 12;
$_SESSION['spin'] = 0;

include "config.php";


?><!DOCTYPE html>
<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Basic Servo Controller</title>

		<script src="jquery-1.12.1.min.js"></script>
		<script src="ajax.js"></script>

	</head>

	<body>
	Basic Servo Test<br>
		<button type="button" id="clickLeft">LEFT</button>
		<button type="button" id="clickMiddle">CENTER</button>
		<button type="button" id="clickRight">RIGHT</button>

		<div id='debug'>
		</div>
	</body>

</html>
