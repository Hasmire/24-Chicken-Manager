<x-layout-employee>
    @push('title')
        <title>Add Order page</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/add-order-styles.css') }}" rel="stylesheet">
    @endpush

    <div class="header">
        <div class="content-margin">
            <h1>Add Order</h1>
            <p>Add the required items to the order.</p>
        </div>
    </div>

    <!-- ADD ITEM SECTION -->
    <form action="addorder" method="POST">
        @csrf
        <div class="add-item">
            <h2>Add Item</h2>
            <label for="item">Item</label>
            <select name="id" required>
                <option value="" disabled selected>Select Flavor</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>

            <label for="quantity">Quantity </label>
            <input type="number" name="quantity" placeholder="1" min="1" value="1" required>

            <input id="button" type="submit" value="+ Add Item" name="add-item">
        </div>
    </form>

    <!-- ITEMS ADDED -->
    <div id="items-added">
        <h2>Items Added</h2>

        <!-- LEFT SECTION-->
        <div class="leftside">

            @if ($foods->count())
                @foreach ($foods as $food)
                    <x-employee-item :food="$food" />
                @endforeach
            @else
                <p class="text-center">Cart is empty</p>
            @endif
        </div>

        <!-- RIGHT SECTION-->
        <form action="employee/order" method="POST">
            <div class="rightside">
                <label id="label-type" for="user">User </label>
                <select id="type" name="user" required>
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->firstname . ' ' . $user->lastname }}</option>
                    @endforeach
                </select><br>

                <label for="type" id="label-type">Order Type </label>
                <select id="type" name="type" required>
                    <option value="1">Dine In</option>
                    <option value="2">Takeout</option>
                    <option value="3">Delivery</option>
                </select><br>

                <label for="promo" id="label-type">Promo Code </label>
                <input id="promo" type="text" name="promo"><br>

                <label id="label-total">Total </label>
                <p id="total-price">₱{{ $total }}</p><br>

                <a href="order"><input type="button" id="delbutton" value="Cancel Order"></a>
                <input type="submit" id="button" value="Save Order">
            </div>
        </form>
    </div>
</x-layout-employee>
