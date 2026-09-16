@foreach ($movies as $movie)
    <div class="col-6 col-sm-4 col-md-3 col-xl-20">
        <a href="{{ route('movies.show', $movie->slug) }}">
            <div class="mb-4 card">
                <img src="{{ $movie->poster }}" class="card-image-movie-list" alt="{{ $movie->title }}" loading="lazy" />
                <span class="rounded-pill text-bg-dark badge badge-rating">
                    <img class="star-rating" src="{{ asset('assets/img/star-rating.png') }}" alt="" />
                    ({{ $movie->average_rating }})
                </span>
            </div>
        </a>
    </div>
@endforeach
