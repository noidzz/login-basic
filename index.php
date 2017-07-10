<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
		crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="login">
					<div class="title-login">
						<h2>Login</h2>
					</div>
					<div class="login-form">
						<form action="sayhi.php" method="post">
						  <div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" name="email">
						  </div>
						  <div class="form-group">
						    <label for="pwd">Password:</label>
						    <input type="password" class="form-control" name="password">
						  </div> 	
						  <button type="submit" name="login"
						  	class="btn btn-primary btn-login">Submit</button>
						</form>
					</div>
				</div>
			</div>			
		</div>
	</div>
</body>
</html>