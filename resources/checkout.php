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

  <h3 id="heading">Customer Information</h3>
  <p id="cname-label">Customer Name</p>
  <p id="cname-input">Juan dela Cruz</p>

  <br>
  <p id="cname-label">Contact Number</p>
  <p id="cname-input">0916 123 4567</p>

  <br>
  <p id="cname-label">Email Address</p>
  <p id="cname-input">juandc@gmail.com</p>

  <a href="update.php"><button>Edit</button></a>

  <h3 id="heading">Order Information</h3>
  <h3 id="flavor">Flavor</h3>
  <p id="price">₱000.00</p>
  <p id="quantity">Qty. 2</p><br>

  <h3 id="flavor">Flavor</h3>
  <p id="price">₱000.00</p>
  <p id="quantity">Qty. 2</p><br>

  <h3 id="flavor">Flavor</h3>
  <p id="price">₱000.00</p>
  <p id="quantity">Qty. 2</p><br>

  <form action="menu.php">
    <label for="type">Order Type</label><br>
    <select id="type" name="type">
      <option value="Dine-in">Dine In</option>
      <option value="Takeout">Takeout</option>
      <option value="Delivery">Delivery</option>
    </select><br>

    <label for="promo">Promo Code</label><br>
    <input type="text" name="promo"><br><br>

    <h3 id="total">Total</h3>
    <p id="total-price">₱000.00</p>

    <input type="submit" name="place-order" value="Place order">
  </form>
  </div>
  
  <!-- FOOTER -->
  <?php include 'header-footer/footer-private.php';?>
  </div>
</body>

</html>