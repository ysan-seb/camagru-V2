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
            echo('    <div class="wrapper">
            <article>article</article>
            <nav>naviguation</nav>
            <aside>aside</aside>
        </div>');
        }
    ?>

    <footer>footer</footer>
</body>

</html>
