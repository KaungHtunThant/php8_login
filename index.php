<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<table>
					<form action="backend.php" method="post">
						<tr>
							<th>Login Form</th>
						</tr>
						<tr>
							<td>
								<label>Enter username or email</label>
							</td>
							<td>
								<input type="text" name="username">
							</td>
						</tr>
						<tr>
							<td>
								<label>Enter password</label>
							</td>
							<td>
								<input type="text" name="password">
							</td>
						</tr>
						<tr>
							<th>
								<input type="submit" name="login">
							</th>
						</tr>
					</form>
				</table>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>