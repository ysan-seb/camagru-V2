<div id="usernameMod" name="usernameMod" onclick="hiddenUsernameMod(this)">
    <form class="usernameForm" actiom="php/changeUsername.php" method="POST" onclick="hiddenUsernameMod(this)">
        <i onclick="hiddenUsernameForm()">✕</i>
        <div class="titleForm"><a>Username</a></div>
        <input type="text" name="newUsername" placeholder="New Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Submit">
    </form>
</div>
