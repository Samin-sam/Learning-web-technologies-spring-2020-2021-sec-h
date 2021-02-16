<?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['mygender']))
        {
            echo "My Gender: ".$_POST['mygender'];
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gender</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 250px;">
			<legend><b>GENDER</b></legend>
			<input type="radio" name="mygender" value="Male"> Male
			<input type="radio" name="mygender" value="Female">Female
			<input type="radio" name="mygender" value="others">Other
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>