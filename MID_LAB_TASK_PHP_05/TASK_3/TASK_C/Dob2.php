<!DOCTYPE html>
<html>
<head>
	<title>Date</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 250px;">
			<legend>DATE OF BIRTH</legend>
			<input type="date" name="mydob" value=" <?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['mydob']))
        {
            echo $_POST['mydob'];
        }
    }

?> "> 
			<br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>