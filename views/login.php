<div class="ui middle aligned center aligned grid">
    <div class="column">
        <form class="ui form" action="method.php" method="post">
            <input type="hidden" name="action" value="login">
            <div class="field">
                <label>Username</label>
                <input type="text" name="usrname" placeholder="Username">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <button class="ui button" type="submit">Login</button>
        </form>
        <div class="ui message">
            New to us? <a href="?page=register">Sign Up</a>
        </div>
    </div>
</div>
