<div class="tabs is-toggle">
    <ul>
        @foreach($categories as $cat)
            <li class="{{ ($cat->category_name === $chosen_category) ? 'is-active' : '' }}">
                <a href="/{{ $users->id }}/{{ $cat->category_name }}" class="text-decoration-none">
                    <span>{{ $cat->category_name }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>

{{-- MENU COFFEE --}}
<div style="display: flex; flex-wrap: wrap;">
    @foreach($coffees as $c)
        <div class="card" style="margin: 10px 10px;" data-name="coffee-{{ $c->id }}">
            <div class="card-image">
                <figure class="image is-square">
                <img src="{{$c->coffee_img}}" alt="Image">
                </figure>
            </div>
            <div style=" padding: 10px !important;">
                <div class="content">
                <h4>{{ $c->coffee_name }}</h4>
                <p>Price: {{ $c->coffee_price }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
