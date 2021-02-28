<?php 
    if(isset($_POST['submit']))
	{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $username= $_POST['username'];
        $pass= $_POST['pass'];
        $currpass= $_POST['currpass'];
        $gender= $_POST['gender'];
        $dob= $_POST['dob'];

        if(ctype_alnum($name)||strpos($name, " ")!== false){
            if (strpos($email, "@")!== false && strpos($email, ".")!== false) 
            {
                if (ctype_alnum($username)|| strpos($username, "-")!== false||strpos($username, "_")!== false||strpos($username, " ")!== false && strlen($username)>=2)
                {
                    if(strlen($pass)>=8 && strpos($pass, "@")!== false||strpos($pass, "#")!== false||strpos($pass, "$")!== false||strpos($pass, "%")!== false)
                    {
                        if($pass==$currpass)
                        {
                            echo "Registration Successful!";
                        }
                        else
                        {
                            echo "Password must match";
                        }
                    }
                    else
                    {
                        echo "Invalid password";
                    }
                }
                else
                {
                    echo "Invalid username";
                }
            }
            else 
            {
                echo("$email is not a valid");
            }
        }
        else
        {
            echo "Invalid name";
        }


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
        <form method="post">
        <fieldset style="width: 400px;">
            <legend><b>Registration </b></legend>
<table>
            <tr>
                <td><label for="">Name </label></td>
                <td>:<input type="text" name="name" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Email </label></td>
                <td>:<input type="text" name="email" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">User Name </label></td>
                <td>:<input type="text" name="username" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Password </label></td>
                <td>:<input type="text" name="pass" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Confirm Password </label></td>
                <td>:<input type="text" name="currpass" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" id="" checked>
                        <label for="">Male</label>
                        <input type="radio" name="gender" id="">
                        <label for="">Female</label>
                        <input type="radio" name="gender" id="">
                        <label for="">Other</label>
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
                        <label for="">(mm/dd/yyyy)</label>
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
    
</body>
</html>