cgfhgfhfghhf

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Datepicker - Format date</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	<script>

	
	$(function() {
    	$("#datepicker").datepicker({ dateFormat: 'D, d M'});

            $("#alternate").click(function() {
				$("#alternate").hide();
				$("#datepicker").show();
	            $("#datepicker").focus();
	        });

    	$("#datepicker").change(function() {
			$("#alternate").show();
			$("#datepicker").hide();
    		$("#alternate").html($("#datepicker").val());
    	});
    });
	
		

	</script>
</head>
<body>
<input id="datepicker" readonly style="display:none" /><label id="alternate">change me</label>





</body>
</html>