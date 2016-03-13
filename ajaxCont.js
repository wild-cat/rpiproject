var mouseHold = false;

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
					
					//BASIC SERVO ON CONTINUOUS RULES
					
					$('#basicServoRightCont').
					
					mousedown(function() {
						
						$('#debug').append("<span style='color:#00f;'>Basic Servo Turn Right <br></span>");
						mouseHold = true;
						
						continueExecutionRight();
						
					})
					.mouseup(function() {
						
						$('#debug').append("<span style='color:#f00;'>Stop<br></span>");
						mouseHold = false;
						
					});

					$('#basicServoLeftCont').
					
					mousedown(function() {
						
						$('#debug').append("<span style='color:#00f;'>Basic Servo Turn Left <br><br></span>");
						mouseHold = true;
						
						continueExecutionLeft(); //turnRightBasicServo.php
						
					})
					.mouseup(function() {
						
						$('#debug').append("<span style='color:#f00;'>Stop<br></span>");
						mouseHold = false;
						
					});
					
});


function doStuffRight() {
	//setTimeout(continueExecutionRight, 500);
}

function doStuffLeft() {
	//setTimeout(continueExecution, 500);
}


function continueExecutionRight() {
	
	if (mouseHold) {
	
		$.ajax({
			type: 'POST',
			cache: false,
			url: 'turnRightBasicServo.php',
			data: '',
			dataType: 'html', 
			
			success: function(data, status, xml) {
				$('#debug').append(data + '<br>');
			},
			
		});
		
		setTimeout(continueExecutionRight, 200);
	}
	
}

function continueExecutionLeft() {
	
	if (mouseHold) {
	
		$.ajax({
			type: 'POST',
			cache: false,
			url: 'turnLeftBasicServo.php',
			data: '',
			dataType: 'html', 
			
			success: function(data, status, xml) {
				$('#debug').append(data + '<br>');
			},
			
		});
		
		setTimeout(continueExecutionLeft, 200);
	}
	
}