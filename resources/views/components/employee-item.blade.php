@props(['food'])
<form method="POST" action="/remove-order">
    <div class="item-view">
        <div class="item-image">
            <img src="{{ asset($food->attributes->thumbnail) }}" alt="png">
        </div>
        <h3 id="flavor">{{ $food->name }}</h3>
        <p id="price-quantity">₱{{ $food->price * $food->quantity }}<br><span class="quantity">Qty.
                {{ $food->quantity }}</span></p>
        <input type="hidden" name="id" value="{{ $food->id }}">

        <button type="submit" class="delete">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </div>
</form>
