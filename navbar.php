<header class="header">
    <h1 class="logo">
        <a href="index.php">CAMAGRU</a>
    </h1>
    <ul class="main-nav">
        <li>
            <a href="gallery.php">GALLERY</a>
        </li>
        <li>
            <a href="capture.php">CAPTURE</a>
        </li>
        <?php
        if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === 'false') {
            echo('
        <li>
            <a onclick="showRegistration()">REGISTER</a>
        </li>
        <li>
            <a onclick="showLogin()">LOGIN</a>
        </li>
        ');
        } else {
        echo('
        <li>
            <a href="account.php">ACCOUNT</a>
        </li>
        <li>
            <a href="disconnect.php">SIGN OUT</a>
        </li>
            ');
        }
        ?>
    </ul>
</header>