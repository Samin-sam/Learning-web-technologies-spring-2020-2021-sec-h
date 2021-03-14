<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><b>Registration</b></legend>
			<table>
				<tr>
					<td>Id</td>
					<tr>
					<td><input type="text" name="Id" value=""> </td>
				</tr>
				<tr>
					<td>Password</td>
					<tr>
					<td><input type="password" name="password" value=""> </td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<tr>
					<td><input type="password" name="repass" value=""> </td>
				</tr>
				<tr>
					<td>Name</td>
					<tr>
					<td><input type="text" name="username" value=""> </td>
				</tr>

				<tr>
					<td>User Type</td>
					<tr>
					<td> 
						<input type="radio" name="gender"> User
						<input type="radio" name="gender"> Admin
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="signup" value="Sign Up"> 
						<a href="login.html">Sign In</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>