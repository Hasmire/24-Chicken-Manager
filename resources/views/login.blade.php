<x-layout-public>
    @push('title')
        <title>Login</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/login-styles.css') }}" rel="stylesheet">
    @endpush

    <div class="login">
        <h1><span id="yellow">24</span> <span id="red">Chicken</span></h1>

        <div class="login-content">
            <form action="POST" action="">
                <label for="email">Email</label><br>
                <input type="email" name="email" placeholder="Enter your email" required><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>

                <input type="submit" name="login" value="Login">
            </form>

            <p>Don't have an account? <a href="{{ route('users.create') }}">Sign Up</a></p>
        </div>
    </div>
</x-layout-public>
