<x-layout-public>

    @push('title')
        <title>Sign up</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/signup-styles.css') }}" rel="stylesheet">
    @endpush
    <div class="header">
        <div class="content-margin">
            <h1>Sign up</h1>
            <p>Create an account</p>
        </div>
    </div>

    <!-- CONTENT - Sign up Form-->
    <div class="row">
        <div class="column1">
            <form method="POST" action="">
                <!-- action depending on isEmployee -->
                <h3 id="heading">Customer Information</h3>

                <div class="form-half">
                    <div class="form-left">
                        <label for="fname">First Name</label><br>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-right">
                        <label for="lname">Last Name</label><br>
                        <input type="text" name="lname" placeholder="Last Name" required><br>
                    </div>
                </div>
                <br>

                <label for="address">Address</label><br>
                <input type="text" name="address" placeholder="Enter your address" required><br>
                <br>

                <div class="form-half">
                    <div class="form-left">
                        <label for="email">Email Address</label><br>
                        <input type="email" name="email" placeholder="Enter your email" required><br>
                    </div>
                    <div class="form-right">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" placeholder="Enter your password" required><br>
                    </div>
                </div>

                <br><br>
                <input type="submit" name="signup" value="Sign Up">
            </form>
        </div>

        <div class="column-mid"></div> <!-- column separator -->
        <div class="column2"></div> <!-- branch image -->
    </div>
</x-layout-public>
