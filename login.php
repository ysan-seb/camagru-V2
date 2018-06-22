<div id="loginMod" name="loginMod" onclick="hiddenLoginMod(this)">
    <form class="loginForm" action="phpAction/account_connect.php" method="POST" onclick="hiddenLoginMod(this)">
        <i onclick="hiddenLoginForm()">✕</i>
        <div class="titleForm"><a>Login</a></div>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        <a type="button" class="forgot" onclick="showForgotPassword()">Forgot Password?</a>
    </form>
</div>