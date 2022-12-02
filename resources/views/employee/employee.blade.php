<x-layout-employee>
    @push('title')
        <title>Order Queue</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/employee-styles.css') }}" rel="stylesheet">
    @endpush

    <!-- CONTENT -->
    <div class="header">
        <div class="content-margin">
            <h1>Order Queue</h1>
            <a id="add-order" href="{{ url('employee/new-order') }}">+ Add Order</a>
        </div>
    </div>

    <div class="content-margin">
        <form action="confirm" method="POST">
            <fieldset>
                <legend>Confirm Order</legend>
                <table>
                    <x-employee-header-table />
                    @if ($pending->count())
                        @foreach ($pending as $order)
                            <x-employee-order-list :order="$order" />
                        @endforeach
                    @else
                        <tr>
                            <td id="oddcol2">No </td>
                            <td id="evencol2">Pending</td>
                            <td id="oddcol2">Orders!</td>
                        </tr>
                    @endif
                </table>
            </fieldset>
        </form>

        <form action="complete" method="POST">
            <fieldset>
                <legend>Pending Completion</legend>
                <table>
                    <x-employee-header-table />

                    <tr>
                        <td id="oddcol2">23</td>
                        <td id="evencol2">DINE-IN</td>
                        <td id="oddcol2">₱ 670.00</td>
                        <td id="evencol2">CONFIRMED</td>
                        <td id="oddcol2">
                            <button type="submit" id="complete-button" formaction="employee.php">COMPLETE
                                ORDER</button>
                        </td>
                        <td id="evencol2">
                            <div class="center">
                                <a href="edit-order.php" class="icons-lg fb-ic"><i id="icons"
                                        class="fa fa-edit"></i></a>
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
</x-layout-employee>
