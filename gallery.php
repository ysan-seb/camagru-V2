<?php
    session_start();
    $_SESSION['authenticated'] = 'false';
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
        if ($_SESSION['authenticated'] === 'false') {
            include('login.php');
            include('registration.php');
            include('forgotPassword.php');
        }
    ?>
    <div class="wrapper">
        <article>article</article>
    </div>
    <footer>footer</footer>
</body>

</html>