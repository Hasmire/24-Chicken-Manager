<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- TITLE -->
  <title>Order Checkout</title>
  <link rel="icon" href="images/24chicken-icon.png" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="css/checkout-styles.css">
  <style>
    <?php include 'css/header-footer-styles.css'; ?>
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
  <?php include 'header-footer/header-end-user.php';?>

  <!-- CONTENT -->
  <div class="header">
    <div class="content-margin">
      <h1>Order Checkout</h1>
      <p>Please verify the information below and confirm your order.</p>
    </div>
  </div>

  <!-- CONTENT - Sign up Form-->
  <div class="row">
      <div class="column1">
        <form method="POST" action=""> <!-- action depending in isEmployee -->
          <h3 id="heading">Customer Information</h3>

            <p id="cname-label">Customer Name</p>
            <p id="cname-input">Juan dela Cruz</p>

            <br>
            <p id="cname-label">Address</p>
            <p id="cname-input">24 Chicken St., Brgy. Manok, Q.C. 24 Chicken St., Brgy. Manok, Q.C. 24 Chicken St., Brgy. Manok, Q.C. 24 Chicken St., Brgy. Manok, Q.C.</p>

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

        <form action="checkout.php">
          <!-- BACKEND: "item" div will repeat depending on the # of items added to cart-->
          <div class="item">
            <div class="item-image">
            <!-- change image depending on the product -->
              <img src="images/24chicken-item-sample.jpg" id="product-image">
            </div>
              <h3 id="flavor">Flavor</h3>
              <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
            <button type="submit" class="delete">
                <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </div>

          <div class="item">
            <div class="item-image">
            <!-- change image depending on the product -->
              <img src="images/24chicken-item-sample.jpg" id="product-image">
            </div>
              <h3 id="flavor">Flavor</h3>
              <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
            <button type="submit" class="delete">
                <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </div>

          <div class="item">
            <div class="item-image">
            <!-- change image depending on the product -->
              <img src="images/24chicken-item-sample.jpg" id="product-image">
            </div>
              <h3 id="flavor">Flavor</h3>
              <p id="price-quantity">₱000.00<br><span class="quantity">Qty. 2</span></p>
            <button type="submit" class="delete">
                <i class="fa fa-trash" aria-hidden="true"></i> 
            </button>
          </div>
        </form>

        <br>
        <form action="menu.php">
          <label for="type" id="form-label">Order Type</label><br>
          <select id="type" name="type">
            <option value="Dine-in">Dine In</option>
            <option value="Takeout">Takeout</option>
            <option value="Delivery">Delivery</option>
          </select><br>

          <label for="promo" id="form-label">Promo Code</label><br>
          <input type="text" id="promo" name="promo"><br>

          <h3 id="total" id="total-label">Total</h3>
          <p id="total-price">₱000.00</p>

          <br><br>
          <input type="submit" id="place-order" name="place-order" value="Place order">
        </form>
      </div> 
  </div>  

  </div>
  
  <!-- FOOTER -->
  <?php include 'header-footer/footer-private.php';?>
  </div>
</body>

</html>
