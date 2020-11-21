<html>
<head>
<link rel="stylesheet" type="text/css" href="design.css"/>
</head>
<body>
    <table align="center">
        <tr>
            <td>
            <form action="studentList.php" method="post">
                <select name="CourseList">
                    <option value="Python">Python</option>
                    <option value="Database">Database</option>
                    <option value="Java">Java</option>
                    <option value="PHP">PHP</option>
                </select>
                <?php
                    if(isset($_POST['markAssignment'])){
                        echo '<input type="submit" name="markAssign" value="Mark Assignment!">';
                    }
                    else if(isset($_POST['giveAssignment'])){
                        echo '<input type="submit" name="giveAssign" value="Give Assignment">';
                    }

                ?>
            </form>
            </td>
        </tr>
    </table>
</body>
</html>