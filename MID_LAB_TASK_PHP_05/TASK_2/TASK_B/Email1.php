<?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['myemail']))
        {
            echo $_POST['myemail'];
            echo "<br>";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 250px;">
			<legend>Email</legend>
			Email: <input type="email" name="myemail" value="">  <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>