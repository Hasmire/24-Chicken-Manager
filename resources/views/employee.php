<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- TITLE -->
        <title>Employee page</title>
        <link rel="icon" href="images/24chicken-icon.png" type="image/x-icon">

        <!-- CSS -->
        <link rel="stylesheet" href="employee-styles.css">

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
            <?php include 'C:\xampp\htdocs\header-employee.php';?>

            <!-- CONTENT -->
            <div class="header">
                <div class="content-margin">
                    <h1>Order Queue</h1>
                    <a id="add-order" href="add-order.php">+ Add Order</a>
                </div>
            </div>

            <fieldset>
            <legend>Confirm Order</legend>
                <table>
                    <tr>
                        <th id="oddcol">Order ID</th>
                        <th id="evencol">Order type</th>
                        <th id="oddcol">Amount</th>
                        <th id="evencol">Status</th>
                        <th id="oddcol">Confirm</th>
                        <th id="evencol">Edit</th>
                    </tr>

                    <tr>
                        <td id="oddcol2">placeholder1</td>
                        <td id="evencol2">placeholder2</td>
                        <td id="oddcol2">placeholder3</td>
                        <td id="evencol2">placeholder4</td>
                        <td id="oddcol2">placeholder5</td>
                        <td id="evencol2"><a href="edit-order.php"><img src="images/edit-icon.png" id="edit-icon" alt="edit" width="25"></a></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
            <legend>Pending Completion</legend>
                <table>
                    <tr>
                        <th id="oddcol">Order ID</th>
                        <th id="evencol">Order type</th>
                        <th id="oddcol">Amount</th>
                        <th id="evencol">Status</th>
                        <th id="oddcol">Confirm</th>
                        <th id="evencol">Edit</th>
                    </tr>

                    <tr>
                        <td id="oddcol2">placeholder1</td>
                        <td id="evencol2">placeholder2</td>
                        <td id="oddcol2">placeholder3</td>
                        <td id="evencol2">placeholder4</td>
                        <td id="oddcol2">placeholder5</td>
                        <td id="evencol2"><a href="edit-order.php"><img src="images/edit-icon.png" id="edit-icon" alt="edit" width="25"></a></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
            <legend>Recently Completed Orders</legend>
                <table>
                    <tr>
                        <th id="oddcol">Order ID</th>
                        <th id="evencol">Order type</th>
                        <th id="oddcol">Amount</th>
                        <th id="evencol">Status</th>
                    </tr>

                    <tr>
                        <td id="oddcol2">placeholder1</td>
                        <td id="evencol2">placeholder2</td>
                        <td id="oddcol2">placeholder3</td>
                        <td id="evencol2">placeholder4</td>
                    </tr>
                </table>
             </fieldset>
  
        <!-- FOOTER -->
        <?php include 'C:\xampp\htdocs\header-footer.php';?>
        </div>
    </body>
</html>