<?php 
    session_start();
    $user = $_SESSION['current_user'];

    if(isset($_POST['submit']))
    {
        if($_POST['email']==$user['email'])
        {
            echo "Your Password is: ".$user['password'];
        }
        else{
            echo "Invalid Email";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
</head>
<body>
    <table border="1px" style="border-collapse: collapse; width:60%; margin:auto;">
        <tr>
            <td colspan="2">
                <table style="width: 100%;">
                    <tr>
                        <td><img src="logo1.png" alt="Logo"></td>
                        <td style="float: right; margin-top:35px;">
                        <a style="padding: 5px;" href="One.php">Home</a>
                        <a style="padding: 5px;" href="login.php">Login</a>
                        <a style="padding: 5px;" href="registration.php">Registration</a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr style="height: 250px;">
            <td colspan="2">
            <form method="POST">
        <fieldset style="width: 350px; margin:auto;">
            <legend><b>LOGIN</b></legend>
            <table>
                <tr>
                    <td><label>Enter Email:</label></td>
                    <td><input type="email" name="email" id="" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                    
                </tr>
            
            </table>
        </fieldset>
    
    </form>
            
            </td>
        </tr>
        <tr>
        <td colspan="2">
            <p style="text-align: center;">Copyright &copy; 2021</p>
        </td>
        </tr>
    </table>
</body>
</html>