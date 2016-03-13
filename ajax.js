$(document).ready(
				function() {
					
					
					$('#fireButton').
	
					mousedown(function() {
						
						$('#debug').append("<span style='color:#00f;'>FIRE!<br></span>");
						
						$.ajax({
							type: 'POST',
							cache: false,
							url: 'fireButton.php',
							data: 'action=start',
							dataType: 'html', 
							
							success: function(data, status, xml) {
								$('#debug').append(data + '<br>');
							},
							
						});
						
					})
					.mouseup(function() {
						
						$('#debug').append("<span style='color:#f00;'>STOP FIRE<br></span>");
						
						$.ajax({
							type: 'POST',
							cache: false,
							url: 'fireButton.php',
							data: 'action=stop',
							dataType: 'html', 
							
							success: function(data, status, xml) {
								$('#debug').append(data + '<br>');
							},
							
						});
						
					});
});