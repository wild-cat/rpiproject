$(document).ready(
				function() {
					$('#clickLeft').click(
						function() {
							$('#debug').append("<span style='color:#00f;'>To the left<br></span>");
							
							$.ajax({
								type: 'POST',
								cache: false,
								url: 'servoLeft.php',
								data: '',
								dataType: 'html', 
								
								success: function(data, status, xml) {
									$('#debug').append(data + '<br>');
								},
								
							});
						});
					$('#clickMiddle').click(
							function() {
								$('#debug').append("<span style='color:#00f;'>To the center<br></span>");
								
								$.ajax({
									type: 'POST',
									cache: false,
									url: 'servoCenter.php',
									data: '',
									dataType: 'html', 
									
									success: function(data, status, xml) {
										$('#debug').append(data + '<br>');
									},
									
								});
							});
					$('#clickRight').click(
							function() {
								$('#debug').append("<span style='color:#00f;'>To the right<br></span>");
								
								$.ajax({
									type: 'POST',
									cache: false,
									url: 'servoRight.php',
									data: '',
									dataType: 'html', 
									
									success: function(data, status, xml) {
										$('#debug').append(data + '<br>');
									},
									
								});
							});
				});