<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- TITLE -->
        <title>Order Queue</title>
        <link rel="icon" href="../images/24chicken-icon.png" type="image/x-icon">

        <!-- CSS -->
        <link rel="stylesheet" href="../css/employee-styles.css">
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
                    <h1>Order Queue</h1>
                    <a id="add-order" href="add-order.php">+  Add Order</a>
                </div>
            </div>

            <form action="employee.php" method="POST">
            <div class="content-margin">
            <fieldset>
            <legend>Confirm Order</legend>
                <table>
                    <tr>
                        <th id="oddcol">Order ID</th>
                        <th id="evencol">Order Type</th>
                        <th id="oddcol">Amount</th>
                        <th id="evencol">Status</th>
                        <th id="oddcol">Confirm</th>
                        <th id="evencol">Edit</th>
                    </tr>

                    <tr>
                        <td id="oddcol2">23</td>
                        <td id="evencol2">DINE-IN</td>
                        <td id="oddcol2">₱ 670.00</td>
                        <td id="evencol2">PENDING</td>
                        <td id="oddcol2">
                          <button type="submit" id="confirm-button" formaction="employee.php">CONFIRM ORDER</button>
                        </td>
                        <td id="evencol2">
                          <div class="center">
                            <a href="edit-order.php" class="icons-lg fb-ic"><i id="icons" class="fa fa-edit"></i></a>
                          </div>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
            <legend>Pending Completion</legend>
                <table>
                    <tr>
                        <th id="oddcol">Order ID</th>
                        <th id="evencol">Order Type</th>
                        <th id="oddcol">Amount</th>
                        <th id="evencol">Status</th>
                        <th id="oddcol">Confirm</th>
                        <th id="evencol">Edit</th>
                    </tr>

                    <tr>
                        <td id="oddcol2">23</td>
                        <td id="evencol2">DINE-IN</td>
                        <td id="oddcol2">₱ 670.00</td>
                        <td id="evencol2">PENDING</td>
                        <td id="oddcol2">
                          <button type="submit" id="complete-button" formaction="employee.php">COMPLETE ORDER</button>
                        </td>
                        <td id="evencol2">
                          <div class="center">
                            <a href="edit-order.php" class="icons-lg fb-ic"><i id="icons" class="fa fa-edit"></i></a>
                          </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            </form>

            <fieldset>
            <legend>Recently Completed Orders</legend>
                <table>
                    <tr>
                        <th id="oddcol">Order ID</th>
                        <th id="evencol">Order Type</th>
                        <th id="oddcol">Amount</th>
                        <th id="evencol">Status</th>
                    </tr>

                    <tr>
                        <td id="oddcol2">16</td>
                        <td id="evencol2">DINE-IN</td>
                        <td id="oddcol2">₱ 430.00</td>
                        <td id="evencol2">COMPLETED</td>
                    </tr>
                </table>
            </fieldset>
            </div>
  
        <!-- FOOTER -->
        <?php include '../header-footer/footer-private.php';?>
        </div>
    </body>
</html>
