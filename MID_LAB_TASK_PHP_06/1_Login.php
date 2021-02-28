<?php 
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$array_username=str_split($username);

if (ctype_alnum($username)||strpos($username, "-")!== false||strpos($username, "_")!== false||strpos($username, " ")!== false && strlen($username)>=2) 
{
if(strlen($password)>=8 && strpos($password, "@")!== false||strpos($password, "#")!== false||strpos($password, "$")!== false||strpos($password, "%")!== false)
{
echo "Login Successful";
}
else
{
echo "Invalid Password";
}
} 
else 
{
echo "Invalid Username";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Log in</title>
</head>
<body>
<form method="POST">
<fieldset style="width: 320px;">
<legend><b>LOGIN</b></legend>
<table>
<tr>
<td><label>User Name </label></td>
<td>:<input type="text" name="username" id="" required></td>
</tr>
<tr>
<td colspan="2"></td>
</tr>
<tr>
<td><label>Password </label></td>
<td>:<input type="password" name="password" id="" required></td>
</tr>
<tr>
<td colspan="2"><hr></td>
</tr>
<tr>
<td colspan="2">
<input type="checkbox" name="" id="">
<label>Remember Me</label>
</td>
</tr>
<tr>
<td colspan="2"><br></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Submit"></td>
<td><a href="#"><u>Forgot Password?<u/></a></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>