<?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['mygender']))
        {
            echo "My Gender: ".$_POST['mygender'];
        }
    }

?>