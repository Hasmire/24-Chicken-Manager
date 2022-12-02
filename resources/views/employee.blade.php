<x-layout-employee>
    @push('title')
        <title>Employee Dashboard</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/employee-styles.css') }}" rel="stylesheet">
    @endpush

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
    
</x-layout-employee>