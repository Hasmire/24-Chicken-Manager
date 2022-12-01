<x-layout-admin>
  @push('title')
      <title>Admin Dashboard</title>
  @endpush

  @push('styles')
  <link href="{{ asset('css/menu-styles.css') }}" rel="stylesheet">
@endpush

<div class="header">
  <div class="content-margin">
      <h1>Menu Editor</h1>
      <p></p>
  </div>
</div>

<div class="cards">
  <!-- BACKEND: article will repeat depending on the # of items -->
  <!-- NOTE: if they click the card, they will be redirected
to the specific flavor's item.php -->
  <!-- NOTE2: CSS only works if form is separated per card -->

  @if ($foods->count())
      @foreach ($foods as $food)
          <x-admin-menu-card :food="$food" />
      @endforeach
  @else
      <p class="text-center">No posts yet. Please check back later.</p>
  @endif
</div>

{{-- ADD ITEM TO MENU --}}
<a href="{{ Route('adminpage.create') }}" style="text-decoration:none;"><button id="checkout">Add Menu Item</button></a>
  
</x-layout-admin>
