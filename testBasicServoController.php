<?php

session_start();


$_SESSION['servoPin'] = 12;
$_SESSION['spin'] = 0;

include "config.php";


?><!DOCTYPE html>

<!--
	Project RPi Turret

	PHP file for testing Servo activation in a web browser : testBasicServoController.php
	@author GL
	2016-02-21
	@author MH
	2016-03-01
-->

<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Basic Servo Controller</title>

		<script src="jquery-1.12.1.min.js"></script>
		<script type="text/javascript">

			

			$(document).ready(function()
			{
			
				$('#clickLeft').click(function() {
					$('#debug').append("<span style='color:#00f;'>To the left<br></span>");
					var a = new XMLHttpRequest();
					
					var servoPin = $('#servoPin').val();
					
					a.open("GET", "servoLeft.php?servoPin="+servoPin+'&spin='+$('#spin').val());
					a.onreadystatechange=function()
					{
						if(a.readyState==4)
						{
							
							if (a.status == 200){
								
								var msg = a.responseText;
								$('#debug').append(msg+'<br>');
								
							}
							else
							{
								alert("Error")
							}
						}
					}
					a.send();
				});

				$('#clickMiddle').click(function() {
					$('#debug').append("<span style='color:#00f;'>To the center<br></span>");
					var a = new XMLHttpRequest();
					
					var servoPin = $('#servoPin').val();
					
					a.open("GET", "servoCenter.php?servoPin="+servoPin);
					a.onreadystatechange=function()
					{
						if(a.readyState==4)
						{
							if(a.status == 200){}
							else
							{
								alert("Error")
							}
						}
					}
					a.send();
				});

				$('#clickRight').click(function() {
					$('#debug').append("<span style='color:#00f;'>To the right<br></span>");
					var a = new XMLHttpRequest();
					
					var servoPin = $('#servoPin').val();
					
					a.open("GET", "servoRight.php?servoPin="+servoPin);
					a.onreadystatechange=function()
					{
						if(a.readyState==4)
						{
							if(a.status == 200){}
							else
							{
								alert("Error")
							}
						}
					}
					a.send();
				});

			});
		</script>

	</head>

	<body>
	Basic Servo Test<br>
		Servo PIN: <input type='text' id='servoPin' value='12'><br>
		SPIN: <input type='text' id='spin'>
		<button type="button" id="clickLeft">LEFT</button>
		<button type="button" id="clickMiddle">CENTER</button>
		<button type="button" id="clickRight">RIGHT</button>

		<div id='debug'>
		</div>
	</body>

</html>
