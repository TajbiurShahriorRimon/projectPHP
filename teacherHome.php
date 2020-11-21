<?php
    include 'homePage.php'
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="design.css"/>
    </head>
    <body>
        <table align="left" valign="top">
            <tr>
                <td>
                    <form action="notification.php" method="post">
                        <br>
                        <input type="submit" name="detailSubmit" value="New Notification">
                    </form>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <form action="addCourse.php" method="post">
                        <br>
                        <input type="submit" name="detailSubmit" value="New Course">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>