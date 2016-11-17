<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Workshop||Shoaib</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="well container">
		  <h2 class="col-md-offset-2 cl-md-4">Data Collection</h2>
		  <form class="form-horizontal" action="data.php" method="POST">

		  		<div class="form-group">
		  			<label class="control-label col-md-2" for="name">Name:</label>
			  		<div class="col-md-6">
			  			<input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" required >
			  		</div>
			  	</div>

			  	 <div class="form-group">
				      <label class="control-label col-md-2" for="email">Email:</label>
				    <div class="col-md-6">
				      <input type="email" name="email" class="form-control" id="email" placeholder="someone@example.com"required >
				    </div>
				</div>

			  	<div class="form-group">
		  			<label class="control-label col-md-2" for="dept">Dept.Name:</label>
			  		<div class="col-md-6">
			  			<input type="dept" name="dept" class="form-control" placeholder="CSE,EEE,PME etc"required  >
			  		</div>
			  	</div>


			    <div class="form-group">
				      <label class="control-label col-md-2" for="reg">Reg:</label>
				    <div class="col-md-6">
				      <input type="reg" name="reg" class="form-control" placeholder="201X331XXX"required >
				    </div>
				</div>

			    <div class="checkbox col-md-offset-2 cl-md-4">
			      <label><input type="checkbox"> Remember me</label>
			    </div>
			    <button type="submit" class="btn btn-info col-md-offset-2 cl-md-4">Submit</button>
		  	</form>
		</div>

	</body>
</html>

