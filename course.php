<?php
    if(!isset($_COOKIE['userEmail'])){
        header("Location: home.php");
    }
    /*if(isset($_POST['teacherSignIn'])){
        //header("Location: home.php");
        echo "hiofsd";
    }*/
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="design.css"/>
</head>
    <body>
        <table align="left">
            <tr>
                <td>
                    <form action="addCourse.php" method="post">
                        <input type="submit" name="addCourses" value="Add Courses">
                    </form>
                    <form action="rating.php" method="post">
                        <input type="submit" name="courseRating" value="Course Review & Rating">
                    </form>
                    <form action="assignment.php" method="post">
                        <input type="submit" name="giveAssignment" value="Give Assignment">
                    </form>
                    <form action="assignment.php" method="post">
                        <input type="submit" name="markAssignment" value="Mark Assignment">
                    </form>
                    <form action="rating.php" method="post">
                        <input type="submit" name="certificate" value="Give Certificate">
                    </form>
                </td>
            </tr>
        </table>
        <table align="center">
            <tr>
                <td>
                    <h1>
                        <a href="document.php"><img src="files/ER_diagram.png" width="300" height="200">Python</a>
                    </h1>
                </td>
            </tr>
        </table>
    </body>
</html>