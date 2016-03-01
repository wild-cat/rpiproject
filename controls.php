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
		
			var red = 4;
			var green = 17;
			var yellow = 27;
		
		
			$(document).ready(function()
			{
			
				$('#clickON').mousedown(function() {
					
					var send = 0;
					
					if ($('#led').val() == 'red') {
						send = red;
					} else if ($('#led').val() == 'green') {
						send = green;
					} else if ($('#led').val() == 'yellow') {
						send = yellow;
					}
						
					
					var led = 
					
					$('#debug').append("<span style='color:#00f;'>Mouse down on "+$('#led').val()+" .<br></span>");
					var a = new XMLHttpRequest();
					a.open("GET", "pinOn.php?led="+send);
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
					$('#debug').append("<span style='color:#f00;'>Mouse up on "+$('#led').val()+" <br></span>");
					var a = new XMLHttpRequest();
					a.open("GET", "pinOff.php?led="+send);
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
	V0.0.2 <br>
		<input type='text' name='led' id='led'>
		<button type="button" id="clickON">ON</button><br> 
		<div id='debug'>
		</div>
	</body>

</html>
