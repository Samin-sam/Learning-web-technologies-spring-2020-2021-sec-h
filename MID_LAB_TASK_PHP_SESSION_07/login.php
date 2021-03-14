<?php 
session_start();
    if(isset($_POST['submit']))
	{
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user = $_SESSION['current_user'];
        
        if($username==$user['username'] && $password==$user['password'])
        {
            $_SESSION['flag']=true;
            header("location:dashboard.php");
        }
        else{
            echo "Invlid username or password ...";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <table border="1px" style="border-collapse: collapse; width:60%; margin:auto;">
        <tr>
            <td colspan="2">
                <table style="width: 100%;">
                    <tr>
                        <td><img src="logo1.png" alt="Logo"></td>
                        <td style="float: right; margin-top:30px;">
                        <a style="padding: 5px;" href="One.php">Home</a>
                        <a style="padding: 5px;" href="login.php">Login</a>
                        <a style="padding: 5px;" href="Registration.php">Registration</a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr style="height: 250px;">
            <td colspan="2">
                
            <form method="POST">
        <fieldset style="width: 300px; margin:auto;">
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td><label>User Name</label></td>
                    <td><input type="text" name="username" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" name="password" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="" id="">
                        <label>Remember Me</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                    <td><a href="forgotPassword.php">Forgot Password</a></td>
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