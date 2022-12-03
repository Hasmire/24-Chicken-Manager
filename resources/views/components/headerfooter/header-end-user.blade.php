<div class="nav">
    <form action="/logout" method="post">
        @csrf
        <button class="logout-button" type="submit" style="height:30px;font-family: 'Open Sans', sans-serif;">LOGOUT</button>
    </form>
    <div class="content-margin">
        <input type="checkbox" id="nav-check">

        <div class="nav-header">
            <div class="nav-title">
                <img src="../images/24chicken-logo.png" id="logo">
                <p>Hello, <span id="red">{{ auth()->user()->firstname }}</span>!</p>
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
            <a href="landing">Home</a>
        </div>

    </div>
</div>
