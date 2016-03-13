$(document).ready(
				function() {
					
					
					$('#contServoLeft').
					
					mousedown(function() {
						
						$('#debug').append("<span style='color:#00f;'>Turn Left<br></span>");
						
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
						
					})
					.mouseup(function() {
						
						$('#debug').append("<span style='color:#f00;'>Stop<br></span>");
						
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
					
					$('#contServoRight').
					
					mousedown(function() {
						
						$('#debug').append("<span style='color:#00f;'>Turn Right<br></span>");
						
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
						
					})
					.mouseup(function() {
						
						$('#debug').append("<span style='color:#f00;'>Stop<br></span>");
						
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