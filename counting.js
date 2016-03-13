$(document).ready(
				function() {
					$('#counting').
					
					mousedown(function() {
						
						$('#debug').append("<span style='color:#00f;'>Count<br></span>");
						
						while(true) {
							doStuff();
						}
						
					})
					.mouseup(function() {
						
						$('#debug').append("<span style='color:#f00;'>Stop<br></span>");
						
						$.ajax({
							type: 'POST',
							cache: false,
							url: 'sleep_test.php?a=stop',
							data: '',
							dataType: 'html', 
							
							success: function(data, status, xml) {
								$('#debug').append(data + '<br>');
							},
							
						});
						
					});
});



function doStuff() {
	setTimeout(continueExecution, 1000);
}


function continueExecution() {
	
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
	
}
