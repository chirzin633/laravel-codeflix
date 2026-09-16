@extends ('layouts.app')

@section ('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="breadcrumb-link-home" href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $movie->title }}</li>
        </ol>
    </nav>
    <div class="container-movie">
        <div class="row g-4 movie-detail-top">
            <div class="col-12 col-md-3 text-center text-md-start">
                <img class="thumbnail-movie" src="{{ $movie->poster }}" alt="{{ $movie->title }}" loading="lazy" />
            </div>
            <div class="col-12 col-md-5 text-center text-md-start">
                <h5 class="movie-title">{{ $movie->title }}</h5>
                <div class="movie-meta">
                    <span class="year-movie">{{ $movie->release_date->format('d M Y') }}</span>
                    <span class="dash">.</span>
                    <span class="duration-movie">{{ $movie->formatted_duration }}</span>
                </div>
                <p class="prolog-movie">{{ $movie->description }}</p>
                <div class="badge-category">
                    @foreach ($movie->categories as $category)
                        <a href="#" class="rounded-pill badge badge-category-movie">{{ $category->title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-4 column-rating">
                <div class="rectangle-rating">
                    <h1 class="rating-movie">Rating</h1>
                    <div class="star">
                        <i class="fa-solid fa-star star-ratings"></i>
                        <span class="average-rating">{{ $movie->average_rating }} / <span class="per">10</span></span>
                    </div>
                </div>
                <div class="movie-info-detail">
                    <div class="movie-info-row">
                        <span class="movie-info-label">Director</span>
                        <span class="movie-info-value">{{ $movie->director }}</span>
                    </div>
                    <div class="movie-info-row">
                        <span class="movie-info-label">Writters</span>
                        <span class="movie-info-value">{{ $movie->writers }}</span>
                    </div>
                    <div class="movie-info-row">
                        <span class="movie-info-label">Star</span>
                        <span class="movie-info-value">{{ $movie->stars }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 ratio ratio-16x9 movie-player">
            <iframe src="{{ $streamingUrl }}" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3 badge-frame-video">
            <div class="d-flex flex-wrap gap-2">
                <span class="rounded-pill badge text badge-frame-video-tools" id="light-toggle" style="cursor: pointer">
                    <i class="fa-regular fa-lightbulb light-icon"></i>
                    Matikan Lampu
                </span>
                <span class="rounded-pill badge text badge-frame-video-tools">
                    <i class="fa-solid fa-film film-icon"></i>
                    Trailer
                </span>
            </div>
            <span class="rounded-pill badge text badge-frame-video-rating">
                <i class="fa-solid fa-star film-icon"></i>
                Berikan Rating
            </span>
        </div>
    </div>
@endsection

@push ('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const lightToggle = document.querySelector('#light-toggle');
            if (!lightToggle) {
                return;
            }
            const overlay = document.createElement('div');
            overlay.className = 'overlay-dark';
            document.body.appendChild(overlay);

            lightToggle.addEventListener('click', function () {
                const isOn = overlay.style.display === 'block';
                overlay.style.display = isOn ? 'none' : 'block';
                document.querySelector('.container-movie').classList.toggle('movie-focus', !isOn);
            });

            overlay.addEventListener('click', function () {
                overlay.style.display = 'none';
                document.querySelector('.container-movie').classList.remove('movie-focus');
            });
        });
    </script>
@endpush

@push ('styles')
    <style>
        .overlay-dark {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1050;
            display: none;
        }

        .movie-focus {
            position: relative;
            z-index: 1060;
        }
    </style>
@endpush
