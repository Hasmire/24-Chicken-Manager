<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- TITLE -->
  <title>Update Customer Information</title>
  <link rel="icon" href="images/24chicken-icon.png" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="css/menu-styles.css">
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
      <h1>24 Chicken Menu</h1>
      <p>Enjoy your meal with your 24 Chicken favorites!</p>
    </div>
  </div>

  <div class="cards">
    <!-- BACKEND: article will repeat depending on the # of items -->
    <!-- NOTE: if they click the card, they will be redirected 
      to the specific flavor's item.php -->
    <!-- NOTE2: CSS only works if form is separated per card -->
    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>

    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>

    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>

    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>

    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>

    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>

    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>

    <form action="item.php">
      <article class="card">
        <div class="image">
          <img src="images/24chicken-item-sample.jpg" alt="gallery" />
        </div>
        <div class="card-content">
          <div class="flavor">Flavor</div>
          <div class="price">₱430.00</div>
          <input type="submit" id="select" value="Select" />
        </div>
      </article>
    </form>
  </div>

  <a href="checkout.php" style="text-decoration:none;"><button id="checkout">Checkout</button></a>
  
  </div>
  
  <!-- FOOTER -->
  <?php include 'header-footer/footer-private.php';?>
  </div>
</body>

</html>
