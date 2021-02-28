<?php 
    if(isset($_POST['submit']))
	{
        $currpass= $_POST['currpass'];
        $newpass= $_POST['newpass'];
        $rnewpass= $_POST['rnewpass'];

        if($currpass==$newpass)
        {
            echo "New Password should not be same as the Current Password";
        }
        else
        {
            if($newpass==$rnewpass)
            {
                echo "Successful";
            }
            else{
                
                echo "New Password must match with the Retyped Password";
            }
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
</head>
<body>
    <form method="POST">
        <fieldset style="width: 400px;">
            <legend><b>CHANGE PASSWORD</b></legend>
            <table>
                <tr>
                    <td><label for="">Current Password </label></td>
                    <td>:<input type="text" name="currpass" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><font color="green"><label for="">New Password </label></font></td>
                    <td>:<input type="text" name="newpass" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><font color="Red"><label for="">Retype New Password </label></font></td>
                    <td>:<input type="text" name="rnewpass" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        
        
        </fieldset>
    
    </form>
</body>
</html>