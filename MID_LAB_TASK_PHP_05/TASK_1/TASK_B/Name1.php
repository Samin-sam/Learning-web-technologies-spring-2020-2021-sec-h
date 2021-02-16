<?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['myname']))
        {
            echo $_POST['myname'];
            echo "<br>";
        }
    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 300px;">
			<legend>Name</legend>
			Name: <input type="text" name="myname" value="">  <br>
			<hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>