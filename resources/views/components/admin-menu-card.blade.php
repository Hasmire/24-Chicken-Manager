@props(['food'])

<div>
    <article class="card">
        <a class="stretched-link" href="/admin-menu/{{ $food->id }}" style="color: #232323">
            <div class="image">
                <img src="{{ asset($food->thumbnail) }}" alt="gallery" />
            </div>
            <div class="card-content">
                <div class="flavor">{{ $food->name }}</div>
                <div class="price">₱{{ $food->amount }}</div>
            </div>
        </a>
    </article>
</div>
