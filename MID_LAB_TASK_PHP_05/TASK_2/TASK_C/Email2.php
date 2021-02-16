<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 350px;">
			<legend>EMAIL</legend>
			<input type="email" name="myemail" value="  <?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['myemail']))
        {
            echo $_POST['myemail'];
        }
    }   ?> "> 
    
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>