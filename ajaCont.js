$(document).ready(
				function() {
					$('#contServoLeft').click(
						function() {
							$('#debug').append("<span style='color:#00f;'>To the left<br></span>");
							
							$.ajax({
								type: 'POST',
								cache: false,
								url: 'turnLeft.php',
								data: '',
								dataType: 'html', 
								
								success: function(data, status, xml) {
									$('#debug').append(data + '<br>');
								},
								
							});
						});
					$('#contServoRight').click(
							function() {
								$('#debug').append("<span style='color:#00f;'>To the center<br></span>");
								
								$.ajax({
									type: 'POST',
									cache: false,
									url: 'turnRight.php',
									data: '',
									dataType: 'html', 
									
									success: function(data, status, xml) {
										$('#debug').append(data + '<br>');
									},
									
								});
							});
					
					$('#contStop').click(
							function() {
								$('#debug').append("<span style='color:000000;'>Stop<br></span>");
								
								$.ajax({
									type: 'POST',
									cache: false,
									url: 'servoStop.php',
									data: '',
									dataType: 'html', 
									
									success: function(data, status, xml) {
										$('#debug').append(data + '<br>');
									},
									
								});
							});
				});