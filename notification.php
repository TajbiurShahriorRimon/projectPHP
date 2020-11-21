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
                    <input type="text" name="heading" placeholder="enter Heading" size="35">
                    <br>
                    <textarea name="details" id="" cols="80" rows="10" placeholder="enter details"></textarea>
                    <input type="submit" name="detailSubmit" value="Submit Notification">
                </form>
            </td>
        </tr>

    </table>

    </body>

</html>