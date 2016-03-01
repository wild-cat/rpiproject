<!DOCTYPE html>

<!--
	Project RPi Turret

	PHP file for testing LED activation in a web browser : controls.php
	@author GL
	2016-02-21
-->

<html>

	<head>
		<meta charset = "UTF-8">
		<title>Pi Controller</title>

		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function()
			{
				$('#clickON').click(function()
				{
					var a = new XMLHttpRequest();
					a.open("GET", "pinOn.php");
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

				$('#clickOFF').click(function()
				{
					var a = new XMLHttpRequest();
					a.open("GET", "pinOff.php");
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
		<button type="button" id="clickON">ON</button><br> 
		<button type="button" id="clickOFF">OFF</button><br>
	</body>

</html>
