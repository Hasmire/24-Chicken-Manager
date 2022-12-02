<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- TITLE -->
  <title>Add Order</title>
  <link rel="icon" href="../images/24chicken-icon.png" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="../css/add-order-styles.css">
  <style>
    <?php include '../css/header-footer-styles.css'; ?>
  </style>

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
    <?php include '../header-footer/header-employee.php';?>

    <!-- CONTENT -->
    <div class="header">
    <div class="content-margin">
      <h1>Add Order</h1>
      <p>Add items to a new order.</p>
    </div>
  </div>

    <!-- ADD ITEM SECTION -->
    <div class="add-item">
        <form action="employee.php" method="POST">
            <h2 id="heading">Add Item</h2>
            <div class="row">
                <div class="add-flavor">
                    <label for="item">Item</label>
                    <select name="item">
                        <option value="flavor">Flavor</option>
                    </select>
                </div>

            <div class="add-quantity">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" value="number" min="0" max="30">
            </div>

            <div class="add-button">
                <input id="add-button" type="button" value="+  Add Item" name="add-item">
            </div>
        </div>
    </div>
 
    <!-- ITEMS ADDED -->
    <div class="items-added">
        <h2 id="heading">Items Added</h2>
 
        <!-- LEFT SECTION-->
        <div class="leftside">
            <div class="item">
            <div class="item-image">
            <!-- change image depending on the product -->
              <img src="../images/24chicken-item-sample.jpg" id="product-image">
            </div>
              <h3 id="flavor">Flavor</h3>
              <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
            <button type="submit" class="delete" formaction="add-order.php">
                <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </div>

           <div class="item">
            <div class="item-image">
            <!-- change image depending on the product -->
              <img src="../images/24chicken-item-sample.jpg" id="product-image">
            </div>
              <h3 id="flavor">Flavor</h3>
              <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
            <button type="submit" class="delete" formaction="add-order.php">
                <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </div>

            <div class="item">
            <div class="item-image">
            <!-- change image depending on the product -->
              <img src="../images/24chicken-item-sample.jpg" id="product-image">
            </div>
              <h3 id="flavor">Flavor</h3>
              <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
            <button type="submit" class="delete" formaction="add-order.php">
                <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </div>
        </div>

        <div class="column-mid"></div> <!-- column separator -->
        <hr id="divider"> <!-- row separator -->

        <!-- RIGHT SECTION-->
        <div class="rightside">
            <form action="employee.php" method="POST">
                <label id="label-type" for="user">User  </label>
                <select id="type" name="user">
                    <option value="user">User...</option>
                </select><br>

                <label for="type" id="label-type">Order Type  </label>
                <select id="type" name="type">
                    <option value="dinein">Dine In</option>
                    <option value="takeout">Take Out</option>
                    <option value="delivery">Delivery</option>
                </select><br>

                <label for="promo" id="label-type">Promo Code  </label>
                <input id="promo" type="text" name="promo"><br>

                <label id="label-total">Total  </label>
                <p1 id="total-price">₱000.00</p1><br>

                <div class="buttons">
                    <button type="submit" id="cancel-button" formaction="employee.php">Cancel Order</button>
                    <button type="submit" id="save-button" formaction="employee.php">Save</button>
                </div>

            </form>
        </div>
    </div>

    </div>
        
    <!-- FOOTER -->
    <?php include '../header-footer/footer-private.php';?>
    </div>
    </body>
</html>
