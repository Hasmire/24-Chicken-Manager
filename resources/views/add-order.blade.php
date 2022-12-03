<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- TITLE -->
    <title>Add Order page</title>
    <link rel="icon" href="images/24chicken-icon.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="add-order-styles.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Open+Sans:wght@700&display=swap"
        rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">

            <!-- NAVBAR -->
            <?php include 'C:\xampp\htdocs\header-employee.php'; ?>

            <!-- CONTENT -->
            <div class="header">
                <div class="content-margin">
                    <h1>Add Order page</h1>
                </div>
            </div>
            <x-layout-end-user>
                @push('title')
                    <title>Order Checkout</title>
                @endpush

                @push('styles')
                    <link href="{{ asset('css/checkout-styles.css') }}" rel="stylesheet">
                @endpush

                <div class="header">
                    <div class="content-margin">
                        <h1>Add Order</h1>
                        <p>Description.</p>
                    </div>
                </div>

                <!-- ADD ITEM SECTION -->
                <form action="" method="POST">
                    <div class="add-item">
                        <h2>Add Item</h2>
                        <label for="item">Item </label>
                        <select name="item">
                            <option value="flavor">Flavor</option>
                        </select>

                        <label for="quantity">Quantity </label>
                        <input type="number" name="quantity" value="number" min="0" max="30">

                        <input id="button" type="button" value="+ Add Item" name="add-item">
                    </div>

                    <!-- ITEMS ADDED -->
                    <div id="items-added">
                        <h2>Items Added</h2>

                        <!-- LEFT SECTION-->
                        <div class="leftside">
                            <div class="item-view">
                                <div class="item-image">
                                    <img src="images/24chicken-item-sample.jpg" alt="png">
                                </div>
                                <h3 id="flavor">Flavor</h3>
                                <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
                                <input type="image" name="DELETE" id="delete-icon" src="images/delete-icon.png"
                                    alt="delete">
                            </div>

                            <div class="item-view">
                                <div class="item-image">
                                    <img src="images/24chicken-item-sample.jpg" alt="png">
                                </div>
                                <h3 id="flavor">Flavor</h3>
                                <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
                                <input type="image" name="DELETE" id="delete-icon" src="images/delete-icon.png"
                                    alt="delete">
                            </div>

                            <div class="item-view">
                                <div class="item-image">
                                    <img src="images/24chicken-item-sample.jpg" alt="png">
                                </div>
                                <h3 id="flavor">Flavor</h3>
                                <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
                                <input type="image" name="DELETE" id="delete-icon" src="images/delete-icon.png"
                                    alt="delete">
                            </div>
                        </div>

                        <!-- RIGHT SECTION-->
                        <div class="rightside">
                            <label id="label-type" for="user">User </label>
                            <select id="type" name="user">
                                <option value="user">User...</option>
                            </select><br>

                            <label for="type" id="label-type">Order Type </label>
                            <select id="type" name="type">
                                <option value="dinein">Dine In</option>
                                <option value="takeout">Take Out</option>
                            </select><br>

                            <label for="promo" id="label-type">Promo Code </label>
                            <input id="promo" type="text" name="promo"><br>

                            <label id="label-total">Total </label>
                            <p1 id="total-price">₱000.00</p1><br>

                            <a href="employee.php"><input type="button" id="delbutton" value="Cancel Order"></a>
                            <a href="employee.php"><input type="button" id="button" value="Save"
                                    name="ADD"></a>
                        </div>
                    </div>
                </form>
                <!-- FOOTER -->
                <?php include 'C:\xampp\htdocs\header-footer.php'; ?>
        </div>
</body>

</html>
