<?php
	if(isset($_POST['submit']))
	{
            if(isset($_POST['blood']))
            {
                echo "Blood Group: ".$_POST['blood'];
            }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 250px;">
			<legend><b>BLOOD GROUP</b></legend>
			<label for="">Blood Group</label>
			<select name="blood">
				<option value="A+">A+</option>
				<option value="B+">B+</option>
				<option value="O+">O+</option>
				<option value="AB+">AB+</option>
			</select>
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
				
		</fieldset>
	</form>
</body>
</html>