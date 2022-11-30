<x-layout-end-user>
    @push('title')
        <title>24 Chicken Menu</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/menu-styles.css') }}" rel="stylesheet">
    @endpush

    <div class="header">
        <div class="content-margin">
            <h1>24 Chicken Menu</h1>
            <p>Enjoy your meal with your 24 Chicken favorites!</p>
        </div>
    </div>

    <div class="cards">
        <!-- BACKEND: article will repeat depending on the # of items -->
        <!-- NOTE: if they click the card, they will be redirected
      to the specific flavor's item.php -->
        <!-- NOTE2: CSS only works if form is separated per card -->

        @if ($foods->count())
            @foreach ($foods as $food)
                <x-menu-card :food="$food" />
            @endforeach
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </div>

    <a href="checkout" style="text-decoration:none;"><button id="checkout">Checkout</button></a>
</x-layout-end-user>
