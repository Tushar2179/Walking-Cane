<html>
<head>
	<title> Contact us </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<section>
		<div class="container-fluid">
			<div class="container">
				<div class="formbox">
					<form action="registerjob.php" method="get">
						<div class="row">
							<div class="col-sm-6">
								<h1>ADD JOB </h1>
							</div>
							
				        
						<div class="column">
							<div class="row">
								<div class="col-sm-6">
									<div class="inputBox">
										<div class="first_name">Job Title</div>
										<input type="text" name="jobname" maxlenght=20 class="input">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="inputBox">
										<div class="inputText">Last Date</div>
										<input type="text" name="date" maxlenght=20 class="input">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="inputBox">
										<div class="inputText">location</div>
										<input type="text" name="location" maxlenght=30 class="input">
									</div>
								</div>
								
							</div>
							
							<div class="row">
								<div class="col-sm-6">
									<div class="inputBox">
										<div class="inputText">Department/Ministry</div>
										<input type="text" name="ministry" maxlenght=30 class="input">
									</div>
								</div>
								
							</div>
							

							<div class="row">
								<div class="col-sm-12">
									<div class="inputBox">
										<div class="inputText">About</div>
										<textarea class="input" name="about" maxlenght=1000></textarea>
									</div>
								</div>
							</div>
								
							<div class="row">
								<div class="col-sm-12">
										<input type="submit" value="send message" class="button">
								</div>
							</div>
						</div>	
                        
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(".input").focus(function()
		{
			$(this).parent().addClass("focus");
		}).blur(function()
		{
			if($(this).val() === '')
			{
				$(this).parent().removeClass("focus");
			}
		})
	</script>
</body>
</html>