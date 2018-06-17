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
    ?>
    <form class="resetPasswordForm" method="POST">
        <div class="titleForm"><a>Reset Password</a></div>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="passwordConfirm" placeholder="Confirm Password" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
