<x-layout-public>
    @push('title')
        <title>About Us</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/about-styles.css') }}" rel="stylesheet">
    @endpush

    <h1 id="title"><span id="yellow">About</span> <span id="red">Us</span></h1>

    <!-- CONTENT -->
    <div class="login">
        <div class="login-content">
            <p>Serving happiness at a budget friendly price since 2017.<br><br>

                Selling delicious Korean Fried Chicken is not our only goal. Being part of our customers' lives and
                communities is what we aim for.</p>
        </div>
    </div>

</x-layout-public>
