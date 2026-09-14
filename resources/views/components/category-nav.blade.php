<ul class="me-auto mb-2 mb-lg-0 navbar-nav">
    <li class="nav-item dropdown kategori-dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
        </a>
        <div class="dropdown-menu">
            @foreach ($categories as $chunk)
                <ul>
                    @foreach ($chunk as $category)
                        <li>
                            <a class="dropdown-item" href="#">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </li>
    <li class="nav-item"><a class="text-white nav-link" href="#">Movie</a></li>
</ul>
