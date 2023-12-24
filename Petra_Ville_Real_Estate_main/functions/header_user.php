<?php
    session_start();

    if (isset($_SESSION['user_email'])) {
        echo '<li>
        <a href="./pages/logout_page.php" class="active"> <img class="nav-user" src="./assets/images/user_icon.png"/>' 
        . $_SESSION['user_email'] . '</a></li>';
    } else {
        echo '<li>
        <a href="./pages/login_page.php"><img class="nav-user" src="./assets/images/user_icon.png"/>
        Log in</a></li>';
    }
?>