<x-layout-end-user>
    @push('title')
        <title>Update Customer Information</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/update-styles.css') }}" rel="stylesheet">
    @endpush

    <div class="header">
        <div class="content-margin">
            <h1>Update Customer Information</h1>
            <p>Please enter the required information below and save your profile.</p>
        </div>
    </div>

    <!-- CONTENT - Sign up Form-->
    <div class="row">
        <div class="column1">
            <form method="POST" action="update.php">
                <!-- BACKEND: change values depending on user -->
                <h3 id="heading">Customer Information</h3>

                <div class="form-half">
                    <div class="form-left">
                        <label for="fname">First Name</label><br>
                        <input type="text" name="fname" value="Juan" required><br>
                    </div>
                    <div class="form-right">
                        <label for="lname">Last Name</label><br>
                        <input type="text" name="lname" value="dela Cruz" required><br>
                    </div>
                </div>
                <br>

                <label for="address">Address</label><br>
                <input type="text" name="address" value="24 Chicken St., Brgy. Manok, Q.C." required><br>
                <br>

                <div class="form-half">
                    <div class="form-left">
                        <label for="email">Email Address</label><br>
                        <input type="email" name="email" value="juandc@gmail.com" required><br>
                    </div>
                    <div class="form-right">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" value="password" required><br>
                    </div>
                </div>

                <br><br>
                <input type="submit" name="save" value="Save">
            </form>
        </div>

        <div class="column-mid"></div> <!-- column separator -->
        <div class="column2"></div> <!-- branch image -->
    </div>
</x-layout-end-user>
