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
$_SESSION['servoBasicPosition'] = 65;
$_SESSION['firePin'] = 7;
$_SESSION['spin'] = 0;

//print_r($_SERVER);

include "config.php";


?><!DOCTYPE html>
<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Turret Controller</title>

		<script src="jquery-1.12.1.min.js"></script>
		<script src="ajax.js"></script>
		<script src="ajaxBasic.js"></script>
		<script src="ajaxCont.js"></script>

	</head>

	<body>
		<!--Basic Servo<br>
			<button type="button" id="clickLeft">LEFT</button>
			<button type="button" id="clickMiddle">CENTER</button>
			<button type="button" id="clickRight">RIGHT</button><br>
		-->

		<div>
			<table>
  				<tr>
					<td>
						<!-- Empty 'cell' -->
					</td>
 					<td>
						<!--Basic Servo with continuous approach : UP-->
						<button type="button" id="basicServoLeftCont">^</button>
					</td>
		    			<td>
						<!-- Empty 'cell' -->
					</td>
				</tr>
				<tr>
					<td>
						<!--Continuous Servo : LEFT-->
						<button type="button" id="contServoLeft"><</button>
					</td>
					<td>
						<!--FIRE!-->
						<button type="button" id="fireButton" style="color:red;">F</button>
					</td>
					<td>
						<!--Continuous Servo : RIGHT-->
						<button type="button" id="contServoRight">></button>
					</td>
				</tr>
				<tr>
					<td>
						<!-- Empty 'cell' -->
					</td>
					<td>
						<!--Basic Servo with continuous approach : DOWN-->
						<button type="button" id="basicServoRightCont">v</button>
					</td>
					<td>
						<!-- Empty 'cell' -->
					</td>
				</tr>
			</table>
		</div>

		<iframe src="http://<?=$_SERVER['SERVER_ADDR']?>:8081" height="400px" width="400px">
		</iframe>

		<div id='debug' style='display: none;'>
			<?php ?>
		</div>

	</body>

</html>
