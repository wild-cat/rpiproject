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

		<script src="jquery-1.12.1.min.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function()
			{
			
				$('#clickON').mousedown(function() {
					$('#debug').append("<span style='color:#00f;'>Mouse down.<br></span>");
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
				})
				.mouseup(function() {
					$('#debug').append("<span style='color:#f00;'>Mouse up.<br></span>");
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
	V0.0.1 <br>
		<button type="button" id="clickON">ON</button><br> 
		<div id='debug'>
		</div>
	</body>

</html>
