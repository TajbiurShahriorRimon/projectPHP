<?php
    include 'homePage.php';
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
        <table align="left" valign="bottom">
            <tr>
                <td>
                    <form action="notification.php" method="post">
                        <br>
                        <input type="submit" name="notification" value="New Notification">
                    </form>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <form action="course.php" method="post">
                        <br>
                        <input type="submit" name="courses" value="Courses">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>