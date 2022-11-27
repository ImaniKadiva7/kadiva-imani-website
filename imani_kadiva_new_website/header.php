<?php
    session_start();
?>

<!DOCTYPE html>

<html lang = "en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Imani Kadiva Login System Project</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel = "stylesheet" href = "style.css">
    </head>

    <body>
        <nav>
            <div class = "wrapper">
                <h1 class = "title-heading">LOGIN SYSTEM</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About Us</a></li>
                    <li><a href="blog.php">Find Blogs</a></li>
                    <?php
                        if(isset($_SESSION["useruid"]))
                        {
                            echo "<li><a href='profile.php'>Profile page</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                        }
                        else
                        {
                            echo "<li><a href='signup.php'>Sign Up</a></li>";
                            echo "<li><a href='login.php'>Log in</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

        <div class = "wrapper-1">