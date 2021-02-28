<?php 
if(isset($_POST["submit"]))
{
$tDirectory = "uploadFiles/";
$tFile = $tDirectory . basename($_FILES["picture"]["name"]);
$ImageType = strtolower(pathinfo($tFile,PATHINFO_EXTENSION));

if($ImageType != "jpeg" && $ImageType != "jpg" && $ImageType != "png") {
echo "Picture format must be in jpeg or jpg or png.";

}
else
{
if ($_FILES["picture"]["size"] > 4000000)
{
echo "Picture size should not be more than 4MB.";
}
else
{
echo "Successful";
}
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile Picture</title>
</head>
<body>
<form method="post">
<fieldset style="width: 350px;">
<legend><b>Profile Picture</b></legend>
<input type="file" name="picture" id="picture">
<hr>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>
</body>
</html>