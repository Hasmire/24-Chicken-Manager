@props(['food'])

<form method="POST" action="{{ Route('checkout.destroy') }}">\
    @method('DELETE')
    @csrf
    <div class="item">
        <div class="item-image">
            <!-- change image depending on the product -->
            <img src="{{ asset($food->attributes->thumbnail) }}" id="product-image">
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
