<x-layout-end-user>
    @push('title')
        <title>Order Checkout</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/checkout-styles.css') }}" rel="stylesheet">
    @endpush

    <div class="header">
        <div class="content-margin">
            <h1>Order Checkout</h1>
            <p>Please verify the information below and confirm your order.</p>
        </div>
    </div>

    <!-- CONTENT - Sign up Form-->
    <div class="row">
        <div class="column1">
            <form method="POST" action="">
                <!-- action depending in isEmployee -->
                <h3 id="heading">Customer Information</h3>

                <p id="cname-label">Customer Name</p>
                <p id="cname-input">Juan dela Cruz</p>

                <br>
                <p id="cname-label">Address</p>
                <p id="cname-input">24 Chicken St., Brgy. Manok, Q.C. 24 Chicken St., Brgy. Manok, Q.C. 24 Chicken St.,
                    Brgy. Manok, Q.C. 24 Chicken St., Brgy. Manok, Q.C.</p>

                <br>
                <p id="cname-label">Email Address</p>
                <p id="cname-input">juandc@gmail.com</p>

                <br>
                <form>
                    <input type="button" id="edit" value="Edit" onclick="location.href='update.php';">
                </form>
        </div>

        <div class="column-mid"></div> <!-- column separator -->
        <hr id="divider"> <!-- row separator -->

        <div class="column2">
            <h3 id="heading">Order Information</h3>

            <!-- BACKEND: "item" div will repeat depending on the # of items added to cart-->
            @if ($foods->count())
                @foreach ($foods as $food)
                    <x-checkout-item :food="$food" />
                @endforeach
            @else
                <p class="text-center">Cart is empty</p>
            @endif

            <br>
            <form method="POST" action="/place-order">
                @csrf
                <label for="type" id="form-label">Order Type</label><br>
                <select id="type" name="type" required>
                    <option value="1">Dine In</option>
                    <option value="2">Takeout</option>
                    <option value="3">Delivery</option>
                </select><br>

                <label for="promo" id="form-label">Promo Code</label><br>
                <input type="text" id="promo" name="promo"><br>

                <h3 id="total" id="total-label">Total</h3>
                <p id="total-price">₱{{ $total }}</p>

                <input type="hidden" name="total" value="{{ $total }}">
                <br><br>
                <input type="submit" id="place-order" name="place-order" value="Place order">
            </form>
        </div>
    </div>
</x-layout-end-user>
