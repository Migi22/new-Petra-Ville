<!DOCTYPE html>
<html>
    <head>
        <title>
            Log Out page
        </title>
        <link rel="stylesheet" href="../css/user_settings.css">
    </head>
    <body>
        <ul>
            <li><a href="../functions/logout.php">Log out</a></li>
            <li><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Go Back</a></li> <!--This will go back to the previous page-->
        </ul>
    </body>
</html>