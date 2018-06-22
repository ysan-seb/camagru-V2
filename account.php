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
        include('notification.php');
        include('username.php');
        include('email.php');
        include('password.php');
    ?>
    <div class="wrapper">
        <article>
            <div class="accountForm">
                <div class="titleForm">Account</div>
                <div class="accountProp">
                    <a style="float:left">Notification setting</a>
                    <input style="float:right" type="button" onclick="showNotification()" value="Change">
                </div>
                <div class="accountProp">
                    <a style="float:left">Username setting</a>
                    <input style="float:right" type="button" onclick="showUsername()" value="Change">
                </div>
                <div class="accountProp">
                    <a style="float:left">Email setting</a>
                    <input style="float:right" type="button" onclick="showEmail()" value="Change">
                </div>
                <div class="accountProp">
                    <a style="float:left">Password setting</a>
                    <input style="float:right" type="button" onclick="showPassword()" value="Change">
                </div>
            </div>
        </article>
    </div>
    <footer>footer</footer>
</body>

</html>