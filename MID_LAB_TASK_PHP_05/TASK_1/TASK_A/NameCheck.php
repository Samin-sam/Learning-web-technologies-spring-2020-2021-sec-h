<?php
if(isset($_POST['submit']))
{
/*print_r($GET['myname']);*/
$name 		= $_POST['myname'];
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