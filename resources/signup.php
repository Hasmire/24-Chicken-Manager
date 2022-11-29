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
  <?php include 'header-footer/header-end-user.php';?>

  <!-- CONTENT -->
  <div class="header">
    <div class="content-margin">
      <h1>Sign up</h1>
      <p>Create an account</p>
    </div>
  </div>

  <form action="POST" action="">
    <h3 id="heading">Customer Information</h3>

    <label for="fname">First Name</label><br>
    <input type="text" name="fname" placeholder="First Name" required><br><br>

    <label for="lname">Last Name</label><br>
    <input type="text" name="fname" placeholder="Last Name" required><br><br>

    <label for="address">Address</label><br>
    <input type="text" name="address" placeholder="Enter your address" required><br><br>

    <label for="email">Email Address</label><br>
    <input type="email" name="email" placeholder="Enter your email" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" placeholder="Enter your password" required><br><br>

    <input type="submit" name="signup" value="Sign Up">
  </form>

  <br><br>
  <img src="images/dummy.png" id="branch" width="200">
  </div>
  
  <!-- FOOTER -->
  <?php include 'header-footer/footer-private.php';?>
  </div>
</body>

</html>