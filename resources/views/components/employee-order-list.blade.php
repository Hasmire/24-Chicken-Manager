@props(['order'])

<tr>
    <td id="oddcol2">{{ $order->id }}</td>
    <td id="evencol2">
        @if ($order->order_type_id == 1)
            DINE-IN
        @elseif ($order->order_type_id == 2)
            TAKE-OUT
        @elseif ($order->order_type_id == 3)
            DELIVERY
        @endif
    </td>
    <td id="oddcol2">₱{{$order-}}</td>
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
