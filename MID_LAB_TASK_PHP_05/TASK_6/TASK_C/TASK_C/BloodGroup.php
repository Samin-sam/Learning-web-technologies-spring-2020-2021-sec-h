<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 250px;">
			<legend> <b>Blood Group</b></legend>
			<label for="">Blood Group</label>
			<select name="blood">
				<option value="A+"
				<?php
					if(isset($_POST['submit']))
					{
						if($_POST['blood']=="A+")
						{
							echo "selected";
						}
					}

				?>
				
				>A+
			</option>
				<option value="B+" 
				<?php
					if(isset($_POST['submit']))
					{
						if($_POST['blood']=="B+")
						{
							echo "selected";
						}
					}

				?>
				>B+
			</option>
			  <option value="B-" 
				<?php
					if(isset($_POST['submit']))
					{
						if($_POST['blood']=="B-")
						{
							echo "selected";
						}
					}

				?>
				>B-
			</option>
				<option value="O+" 
				<?php
					if(isset($_POST['submit']))
					{
						if($_POST['blood']=="O+")
						{
							echo "selected";
						}
					}

				?>
				>O+
			</option>
				<option value="AB+" 
				<?php
					if(isset($_POST['submit']))
					{
						if($_POST['blood']=="AB+")
						{
							echo "selected";
						}
					}

				?>
				>AB+
			</option>
			</select>
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
				
		</fieldset>
	</form>
</body>
</html>