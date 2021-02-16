<!DOCTYPE html>
<html>
<head>
	<title>Gender</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 250px;">
			<legend><b>GENDER</b></legend>
			Gender: <input type="radio" name="mygender" value="Male" <?php 
			if(isset($_POST['submit']))
			{
			$gender=$_POST['mygender'];
				if($gender=="Male")
				{
					echo "checked";
				}
			}
			?>> Male

			<input type="radio" name="mygender" value="Female" <?php 
			if(isset($_POST['submit']))
			{
				$gender=$_POST['mygender'];
				if($gender=="Female")
				{
					echo "checked";
				}
			}
			?>>Female

			<input type="radio" name="mygender" value="Other" <?php 
			if(isset($_POST['submit']))
			{
				$gender=$_POST['mygender'];
				if($gender=="Other")
				{
					echo "checked";
				}
			}
			?>>Other
			
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>