<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <?php
        include('navbar.php');        
        if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] === 'false') {
            echo('<article><div class="unauthorized">
            <p class="code">401</p>
            <h2>unauthorized access</h2>
            <h3>Access reserved for connected members</h3>
        </div></article>');
        include('login.php');
        include('registration.php');
        include('forgotPassword.php');
        } else {
        include('notification.php');
        include('username.php');
        include('email.php');
        include('password.php');
        echo('<div class="wrapper">
            <article>
                <div class="accountForm">
                    <div class="titleForm">Account</div>
                    <div class="accountProp">
                        <a style="float:left">Notifications</a>
                        <input style="float:right" type="button" onclick="showNotification()" value="Change">
                    </div>
                    <div class="accountProp">
                        <a style="float:left">Username</a>
                        <input style="float:right" type="button" onclick="showUsername()" value="Change">
                    </div>
                    <div class="accountProp">
                        <a style="float:left">Email</a>
                        <input style="float:right" type="button" onclick="showEmail()" value="Change">
                    </div>
                    <div class="accountProp">
                        <a style="float:left">Password</a>
                        <input style="float:right" type="button" onclick="showPassword()" value="Change">
                    </div>
                </div>
            </article>
        </div>');
    }
    ?>
    <footer>footer</footer>
</body>

</html>