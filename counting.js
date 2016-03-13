var mouseClicked = true;


$(document).ready(
				function() {
					$('#counting').
					
					mousedown(function() {
						
						$('#debug').append("<span style='color:#00f;'>Count<br></span>");
						
						mouseClicked = true;
						doStuff();
						
					})
					.mouseup(function() {
						
						$('#debug').append("<span style='color:#f00;'>Stop<br></span>");
						
						mouseClicked = false;
						/*
						$.ajax({
							type: 'POST',
							cache: false,
							url: 'sleep_test.php?a=stop',
							data: '',
							dataType: 'html', 
							
							success: function(data, status, xml) {
								$('#debug').append(data + '<br>');
							},
							
						});*/
						
					});
});



function doStuff() {
	setTimeout(continueExecution, 500);
}


function continueExecution() {
	
	if (mouseClicked) {
	
		$.ajax({
			type: 'POST',
			cache: false,
			url: 'sleep_test.php?a=start',
			data: '',
			dataType: 'html', 
			
			success: function(data, status, xml) {
				$('#debug').append(data + '<br>');
			},
			
		});
		
		setTimeout(continueExecution, 500);
	}
	
}
