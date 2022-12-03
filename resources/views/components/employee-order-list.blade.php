@props(['order'])

<form method="POST" action="employee/confirm-order">
    @csrf
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
        <td id="oddcol2">₱{{ $order->amount }}</td>
        <td id="evencol2">{{ strtoupper($order->status) }}</td>

        <input type="hidden" name="id" value="{{ $order->id }}">
        <td id="oddcol2">
            <button type="submit" id="complete-button" name="submit" value="confirm">
                @if ($order->status == 'pending')
                    CONFIRM ORDER
                @elseif ($order->status == 'confirmed')
                    COMPLETE ORDER
                @endif
            </button>
        </td>
        <td id="evencol2">
</form>
<form method="POST" action="employee/edit-order">
    @csrf
    <input type="hidden" name="id" value="{{ $order->id }}">
    <div class="center">
        <button type="submit" id="submit-button" name="submit" value="edit" class="icons-lg fb-ic"
            style="border: none; background-color: transparent;"><i id="icons" class="fa fa-edit"></i>
    </div>
    </td>
    </tr>
</form>
