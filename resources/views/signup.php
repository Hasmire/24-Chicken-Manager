<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- TITLE -->
  <title>Sign up</title>
  <link rel="icon" href="images/24chicken-icon.png" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="css/signup-styles.css">
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
  <?php include 'header-footer/header-public.php';?>

  <!-- CONTENT -->
  <div class="header">
    <div class="content-margin">
      <h1>Sign up</h1>
      <p>Create an account</p>
    </div>
  </div>

  <!-- CONTENT - Sign up Form-->
  <div class="row">
      <div class="column1">
        <form method="POST" action=""> <!-- action depending on isEmployee -->
          <h3 id="heading">Customer Information</h3>

          <div class="form-half">
            <div class="form-left">
              <label for="fname">First Name</label><br>
              <input type="text" name="fname" placeholder="First Name" required>
            </div> 
            <div class="form-right">
              <label for="lname">Last Name</label><br>
              <input type="text" name="lname" placeholder="Last Name" required><br>
            </div> 
          </div>  
          <br>

          <label for="address">Address</label><br>
          <input type="text" name="address" placeholder="Enter your address" required><br>
          <br>

          <div class="form-half">
            <div class="form-left">
              <label for="email">Email Address</label><br>
              <input type="email" name="email" placeholder="Enter your email" required><br>
            </div> 
            <div class="form-right">
              <label for="password">Password</label><br>
              <input type="password" name="password" placeholder="Enter your password" required><br>
            </div> 
          </div> 

          <br><br>
          <input type="submit" name="signup" value="Sign Up">
        </form>
      </div> 

      <div class="column-mid"></div> <!-- column separator -->
      <div class="column2"></div> <!-- branch image -->
  </div> 

  </div> 
  
  <!-- FOOTER -->
  <?php include 'header-footer/footer-public.php';?>
  </div> 
</body>

</html>
