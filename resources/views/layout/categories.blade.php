<h3 class="tm-gold-text tm-title">
    Categories
</h3>
<nav>
    <ul class="nav">
        @foreach ($datacategory as $datacategorysatuan)
            <li><a href="/category/{{ $datacategorysatuan->slug }}" class="tm-text-link">{{ $datacategorysatuan->name }}</a></li>
        @endforeach
    </ul>
</nav>