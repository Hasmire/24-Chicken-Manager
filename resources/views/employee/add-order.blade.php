<x-layout-employee>
    @push('title')
        <title>Add Order page</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/add-order-styles.css') }}" rel="stylesheet">
    @endpush

    <!-- CONTENT -->
    <div class="header">
        <div class="content-margin">
            <h1>{{ $header }}</h1>
            <p>{{ $subtitle }}</p>
        </div>
    </div>

    <!-- ADD ITEM SECTION -->
    <div class="add-item">
        <form action="{{ Route('employee.store') }}" method="POST">
            @csrf
            <h2 id="heading">Add Item</h2>
            <div class="row">
                <div class="add-flavor">
                    <label for="item">Item</label>
                    <select name="id" required>
                        <option value="" disabled selected>Select Flavor</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="add-quantity">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" value="1" min="1" max="30">
                </div>

                <div class="add-button">
                    <input id="add-button" type="submit" value="+  Add Item" name="submit">
                </div>
            </div>
        </form>
    </div>

    <!-- ITEMS ADDED -->
    <div class="items-added">
        <h2 id="heading">Items Added</h2>

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

        <div class="column-mid"></div> <!-- column separator -->
        <hr id="divider"> <!-- row separator -->

        <!-- RIGHT SECTION-->
        <div class="rightside">
            <form action="{{ Route('employee.create') }}" method="POST">
                @method('GET')
                @csrf
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

                <div class="buttons">
                    <button type="submit" id="cancel-button" name="submit" value="cancel">Cancel Order</button>
                    <button type="submit" id="save-button" name="submit" value="save">Save</button>
                </div>

            </form>
        </div>
    </div>

</x-layout-employee>
