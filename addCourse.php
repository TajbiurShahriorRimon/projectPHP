<?php

    if(isset($_POST['submit1'])){
        $filepath = $_FILES["file"]["name"];
        echo print_r($filepath);
        echo "showing path".$filepath;

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
        {
            echo "<img src=".$filepath." height=200 width=300 />";
        }
        else
        {
            echo "Error !!";
        }
    }

?>

<html>
    <head>
    <style>
        
        input[type=button], input[type=submit], input[type=reset] {
            background-color: #4CAF50;
            border: none;
            border-radius: 12px;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }

        div{
            background-color: grey;
        }
        
    </style>
    </head>
    <body>
        <table align="center">
            <tr>
                <td>
                    <form action="" method="post">
                        <input type="text" name="heading" placeholder="Enter Course Name" size="35"><br>
                        <input type="submit" name="detailSubmit" value="Post a photo for the course as a thumbnail">
                    </form>

                </td>
            </tr>
            <tr>
                <td>
                    <form action="addCourse.php" enctype="multipart/form-data" method="post">
                        <input type="file" name="file"><br/>
                        <input type="submit" value="Done" name="submit1"> <br/>
                    </form>
                    <?php 
                    if(isset($_POST['submit1'])){
                        echo "<strong>Course added Successfully</strong>";
                    }

                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>