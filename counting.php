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

$_SESSION['i'] = 0;

?><!DOCTYPE html>
<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Basic Servo Controller</title>

		<script src="jquery-1.12.1.min.js"></script>
		<script src="counting.js"></script>

	</head>

	<body>
		<button type="button" id="counting"><</button>

		<div id='debug'>
		</div>
	</body>

</html>
