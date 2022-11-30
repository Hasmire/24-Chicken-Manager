<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- TITLE -->
  <title>Flavor Name</title>
  <link rel="icon" href="../images/24chicken-icon.png" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="../css/item-styles.css">
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
  <?php include '../header-footer/header-end-user.php';?>

  <!-- CONTENT -->
  <div class="row">
      <div class="column1">
        <!-- BACKEND: change image depending on the item -->
        <img src="../images/24chicken-item-sample.jpg" id="product-image">
      </div> 

      <div class="column2">
        <div class="vertical-center">
          <!-- BACKEND: change details depending on the item -->
          <h1 id="flavor">Flavor</h1>
          <p id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque augue vitae lacus cursus, sit amet maximus erat fermentum.</p>
          <h3 id="price">₱ 000.00</h3>

          <hr id="divider">
          <br>

          <div class="quantity-container">
            <div class="quantity-content">
              <form action="menu.php">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" placeholder="0"  min="0" value="0" required>

                <input type="submit" name="add" value="Add">
              </form>
            </div> 
          </div> 
        </div> 
      </div> 
  </div>  

  </div>
  
  <!-- FOOTER -->
  <?php include '../header-footer/footer-private.php';?>
  </div>
</body>

</html>
