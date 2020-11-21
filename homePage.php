<?php
    /*if(isset($_POST['signout'])){
        echo "hello world";
    }
    if(isset($_POST['instructor'])){
        echo "hello instructor";
    }
    if(isset($_POST['search'])){
        echo "hello search";
    }
    if(isset($_POST['aboutUs'])){
        echo "hello About US";
    }*/
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
        <div>
            <br><br><br>
            <form action="homePage.php" method="post">
                
                <table align="center">
                    <tr>
                        <td width="20%">
                            <!--
                            <a href="aboutus.html">About Us</a>
                            -->
                            <input type="submit" name="aboutUs" value="About us">
                        </td>                
                        <td>
                            <input type="text" name="searchBar" placeholder="type your text here!" size="100"/>
                        </td>
                        <td width="30%">
                            <input type="submit" name="search" value="Search Here!">
                        </td>
                        <td width="30%">
                            <input type="submit" name="signout" value="Sign Out!">
                        </td>
                    </tr>
                </table>
            </form>
            <form action="homePage.php" method="post">
                <table align="right">
                    <tr>
                        <td>
                            <input type="submit" name="instructor" value="Become An Instructor">
                        </td>
                    </tr>
        
                </table>
                <hr>
            </form>
        </div>
            <table align="center">
                <tr>
                    <td>
                        <h1>Welcome to STAREDU</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Trending Courses...</h2>
                    </td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td>
                        
                        <h1>
                            <a href="document.php"><img src="files/ER_diagram.png" width="300" height="200">Database</a>
                        </h1>
                    </td>
                    
                </tr>
            </table>
    </body>
</html>