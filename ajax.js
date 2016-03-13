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