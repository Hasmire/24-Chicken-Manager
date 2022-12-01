<div class="nav">
    <div class="content-margin">
        <input type="checkbox" id="nav-check">

        <div class="nav-header">
            <div class="nav-title">
                <img src="../images/24chicken-logo.png" id="logo">
            </div>
        </div>

        <div class="nav-btn">
            <label for="nav-check">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </label>
        </div>

        <div class="nav-links">
            <a href="edit">Account</a>
            <a href="menu">Menu</a>
            <a href="/">Home</a>
            <a href="login.php"><span id="log">Logout</span></a>
        </div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>
