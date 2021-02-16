<?php

if(isset($_POST['submit']))
{
$name 		= $_POST['myemail'];
if($name == "" )
        {
			echo "null submission";
		}
		else
		{
			echo "$name";
		}
}
else
    {
		echo "Invalid request...";
	}

?>
