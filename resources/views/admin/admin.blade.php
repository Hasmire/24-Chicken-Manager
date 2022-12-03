<x-layout-admin>
  @push('title')
      <title>Admin Dashboard</title>
  @endpush

  @push('styles')
  <link href="{{ asset('css/menu-styles.css') }}" rel="stylesheet">
@endpush

<div class="header">
  <div class="content-margin">
      <h1>Menu Manager</h1>
      <p>Verify and edit the current menu of the restaurant.</p>
  </div>
</div>


{{-- ADD ITEM TO MENU --}}
<a href="{{ Route('adminpage.create') }}" style="text-decoration:none;"><button id="checkout">+ Add Menu Item</button></a>

<br>
<x-success-message/>

<div class="cards">
  @if ($foods->count())
      @foreach ($foods as $food)
          <x-admin-menu-card :food="$food" />
      @endforeach
  @else
      <p style="text-align: center; font-size: 30px; font-weight: 800">No food is prepared yet. Please check back later.</p>
  @endif
</div>



</x-layout-admin>
