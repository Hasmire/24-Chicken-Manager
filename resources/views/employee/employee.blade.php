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
                        <td id="evencol2"></td>
                        <td id="oddcol2"></td>
                        <td id="evencol2"></td>
                    </tr>
                @endif
            </table>
        </fieldset>

        <fieldset>
            <legend>Pending Completion</legend>
            <table>
                <x-employee-header-table />
                @if ($confirmed->count())
                    @foreach ($confirmed as $order)
                        <x-employee-order-list :order="$order" />
                    @endforeach
                @else
                    <tr>
                        <td id="oddcol2">No </td>
                        <td id="evencol2">Pending</td>
                        <td id="oddcol2">Orders!</td>
                        <td id="evencol2"></td>
                        <td id="oddcol2"></td>
                        <td id="evencol2"></td>
                    </tr>
                @endif
            </table>
        </fieldset>

        <fieldset>
            <legend>Recently Completed Orders</legend>
            <table>
                <tr>
                    <th id="oddcol">Order ID</th>
                    <th id="evencol">Order Type</th>
                    <th id="oddcol">Amount</th>
                    <th id="evencol">Status</th>
                </tr>
                @if ($completed->count())
                    @foreach ($completed as $order)
                        <x-employee-completed-list :order="$order" />
                    @endforeach
                @else
                    <tr>
                        <td id="oddcol2">No </td>
                        <td id="evencol2">Completed</td>
                        <td id="oddcol2">Orders!</td>
                        <td id="evencol2"></td>
                    </tr>
                @endif
            </table>
        </fieldset>
    </div>
</x-layout-employee>
