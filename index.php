<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
         crossorigin="anonymous"
      />
	<title>Login</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 col-sm-9 col-xs-12 m-auto mt-5 card shadow px-3 py-5">
				<form class="form" action="backend.php" method="post">
						<h3 class="text-center"><u>Login Form</u></h3>
						<div class="mt-5">
							<input class="form-control text-center" type="text" name="username" placeholder="Enter username">
						</div>
						<br>
						<div class="mt-2">
							<input class="form-control text-center" type="password" name="password" placeholder="Enter password">
						</div>
						<br>
						<hr>
						<br>
						<div class="text-center">
							<input type="submit" name="login" class="form-control btn btn-primary">
						</th>
					</tr>
				</form>
			</div>
		</div>
	</div>
</body>
</html>