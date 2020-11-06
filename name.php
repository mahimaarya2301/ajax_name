<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	</head>
	<body>

		<div class="container">
			<form class="m_MyForm">
				<input type="hidden" name="action" value="store_fullname">
				<div class="form-group">
					<label for="fname">Full name:</label>
					<input type="text" name="fname" class="form-control" placeholder="Enter fname" id="fname">
				</div>
				<button type="submit" name="submit" class="btn btn-danger">Submit</button>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			//Check for the page load
			jQuery(function($){
				//alert('ok');
				
				$('.m_MyForm').submit(function(e){
					e.preventDefault();
				
					var d = $(this).serialize();
					
					$.ajax({
						//p:value
						url:'http://localhost/mahima/ajax_name/ajax.php',
						data:d,
						//Method
						success:function(result,status,xhr){
				
							result = JSON.parse(result);
							console.log(result);
							if(result.status == 200){
								alert(result.msg);
							}
						}
					});
				});
				
			});
		
		
		</script>
	</body>
</html>