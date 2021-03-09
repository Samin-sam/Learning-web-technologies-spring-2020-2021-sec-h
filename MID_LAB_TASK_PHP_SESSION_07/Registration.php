<?php 
    session_start();

    if(isset($_POST['submit']))
	{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $username= $_POST['username'];
        $pass= $_POST['pass'];
        $cpass= $_POST['cpass'];
        $gender= $_POST['gender'];
        $dob= $_POST['dob'];

        if(ctype_alnum($name)||strpos($name, " ")!== false){
            if (strpos($email, "@")!== false && strpos($email, ".")!== false) {
                if (ctype_alnum($username)|| strpos($username, "-")!== false||strpos($username, "_")!== false||strpos($username, " ")!== false && strlen($username)>=2){
                    if(strlen($pass)>=8 && strpos($pass, "@")!== false||strpos($pass, "#")!== false||strpos($pass, "$")!== false||strpos($pass, "%")!== false)
                    {
                        if($pass==$cpass){
                            $user=[
                                'name'=>$name,
                                'email'=>$email,
                                'username'=>$username,
                                'password'=>$pass,
                                'gender'=>$gender,
                                'dob'=>$dob
                            ];
                            $_SESSION['current_user']=$user;

                            header("location:login.php");

                        }
                        else{
                            echo "Password must match ";
                        }
                    }
                    else{
                        echo "Invalid password ";
                    }
                }
                else{
                    echo "Invalid username ";
                }
            }else {
                echo("$email is not a valid ");
            }
        }
        else{ 
            echo "Invalid name ";
        }


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
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
        <tr>
            <td colspan="2" style="height: 400px;">

            <form method="post">
        <fieldset style="width: 300px; margin:auto;">
            <legend>Registration</legend>
            <table>
            <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" name="name" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" name="email" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">User Name</label></td>
                <td><input type="text" name="username" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" name="pass" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Confirm Password</label></td>
                <td><input type="text" name="cpass" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male" id="" checked>
                        <label for="">Male</label>
                        <input type="radio" name="gender" value="Female" id="">
                        <label for="">Female</label>
                        <input type="radio" name="gender" value="Others" id="">
                        <label for="">Others</label>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob" id="" required>
                        <label for="">(dd/mm/yyyy)</label>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
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