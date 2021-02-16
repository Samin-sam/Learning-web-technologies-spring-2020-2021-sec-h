<!DOCTYPE html>
<html>
<head>
    <title>Degree</title>
</head>
<body>

    <form method="POST">
        <fieldset style="width: 250px;">
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"
                <?php 
                        if(isset($_POST['submit']))
                        {
                                foreach($_POST['degree'] as $value){
                                    if($value=="SSC")
                                    {
                                        echo "checked";
                                    }
                            }
                        }
                ?> 
            >SSC

            <input type="checkbox" name="degree[]" value="HSC" 
            <?php 
                        if(isset($_POST['submit']))
                        {
                                foreach($_POST['degree'] as $value){
                                    if($value=="HSC")
                                    {
                                        echo "checked";
                                    }
                            }
                        }
                ?>
            >HSC

            <input type="checkbox" name="degree[]" value="BSc"
            <?php 
                        if(isset($_POST['submit']))
                        {
                                foreach($_POST['degree'] as $value){
                                    if($value=="BSc")
                                    {
                                        echo "checked";
                                    }
                            }
                        }
                ?>
            >BSc

            <input type="checkbox" name="degree[]" value="MSc"
            <?php 
                        if(isset($_POST['submit']))
                        {
                                foreach($_POST['degree'] as $value){
                                    if($value=="MSc")
                                    {
                                        echo "checked";
                                    }
                            }
                        }
                ?>
            >MSc
            
            <br>
            <hr>
                <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>