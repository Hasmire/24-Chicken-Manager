<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- TITLE -->
  <title>Login</title>
  <link rel="icon" href="images/24chicken-icon.png" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="../css/login-styles.css">
  <style>
    <?php include '../css/header-footer-styles.css'; ?>
  </style>

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Open+Sans:wght@700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div id="page-container">
  <div id="content-wrap">

  <!-- NAVBAR -->
  <?php include '../header-footer/header-public.php';?>

  <!-- CONTENT -->
  <div class="login">
      <h1><span id="yellow">24</span> <span id="red">Chicken</span></h1>

      <div class="login-content">
        <form action="POST" action="">
          <label for="email">Email</label><br>
          <input type="email" name="email" placeholder="Enter your email"  required><br>

          <label for="password">Password</label><br>
          <input type="password" name="password" placeholder="Enter your password" required><br>

          <input type="submit" name="login" value="Login">
        </form>

        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
  </div>

  </div>
  <!-- FOOTER -->
  <?php include '../header-footer/footer-public.php';?>
  </div>
</body>

</html>
