<?php
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
                <form action="notification.php" method="post">
                    <select name="" id="">
                        <option value="Python">Python</option>
                        <option value="Database">Database</option>
                        <option value="Java">Java</option>
                        <option value="PHP">PHP</option>
                    </select>
                    <input type="text" name="heading" placeholder="enter Heading" size="35">
                    <br>
                    <textarea name="details" id="" cols="80" rows="10" placeholder="enter details"></textarea>
                    <input type="submit" name="detailSubmit" value="Submit Notification">
                </form>
                <?php 
                    if(isset($_POST['detailSubmit'])){
                        echo "<strong>Notification sent Successfully</strong>";
                    }

                ?>
            </td>
        </tr>

    </table>

    </body>

</html>