<!DOCTYPE html>

<!--
	Project RPi Turret

	PHP file for testing LED activation in a web browser : controls.php
	@author GL
	@author MH

	2016-03-07
-->

<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Controller</title>

		<script src="jquery-1.12.1.min.js"></script>
		<script type="text/javascript"> 

			var csPin = 33;

			$(document).ready(function()
			{
			
				$('#clickLeft').mousedown(function() {
					
					$('#debug').append("<span style='color:#00f;'>Turn Left<br></span>");
					var a = new XMLHttpRequest();
					a.open("GET", "turnLeft.php?csPin="+csPin);
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
				})
				.mouseup(function() {
					
					$('#debug').append("<span style='color:#f00;'>Stop<br></span>");
					var a = new XMLHttpRequest();
					a.open("GET", "turnStop.php?csPin="+csPin);
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

				$('#clickRight').mousedown(function() {

                                        $('#debug').append("<span style='color:#00f;'>Turn Right<br></span>");
                                        var a = new XMLHttpRequest();
                                        a.open("GET", "turnRight.php?csPin="+csPin);
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
                                })
                                .mouseup(function() {

                                        $('#debug').append("<span style='color:#f00;'>Stop<br></span>");
                                        var a = new XMLHttpRequest();
                                        a.open("GET", "turnStop.php?csPin="+csPin);
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
		Continuous Servo on physical pin 33<br>

		<button type="button" id="clickLeft"><</button>
		<button type="button" id="clickRight">></button>

		<div id='debug'>
		</div>
	</body>

</html>
