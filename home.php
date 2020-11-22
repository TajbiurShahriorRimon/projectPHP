<?php
    include 'valid.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="design.css"/>
</head>
<body>
    <table align="center">
        <tr>
            <td>
            <form action="" method="post">
                <input type="submit" name="" value="Sign Up as Student!"><br><br>
                <input type="submit" name="" value="Sign Up as Teacher!">
             </form>
            </td>
        </tr>
    </table>
    <br><br>
    <hr>
    <table align="center">
        <tr>
            <td>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <input type="text" name="userEmail" placeholder="Enter Email Adress" size="35"><br>
                <input type="password" name="userPassword" placeholder="Enter Password" size="35"><br><br>
                <input type="submit" name="" value="Sign IN As Student!">
                <input type="submit" name="teacherSignIn" value="Sign IN as Teacher!">
             </form>
             <?php echo "<strong>$field</strong>"; ?>
            </td>
        </tr>
    </table>
</body>
</html>