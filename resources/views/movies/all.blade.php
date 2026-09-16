@extends ('layouts.app')

@section ('content')
    <h3 class="category-title">Movies</h3>
    <div class="row g-3 card-movie-list" id="movie-list">
        <x-movie-list :movies="$movies" />
    </div>
    @if ($movies->hasMorePages())
        <div class="text-center">
            <button type="button" class="mb-4 btn-outline-success btn load-more" id="load-more" data-page="2">
                <i class="fa-rotate-right rotate-right fa-solid"></i>
                Lebih Banyak
            </button>
        </div>
    @endif
@endsection

@push ('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let loadMoreBtn = document.querySelector('#load-more');
            if (!loadMoreBtn) {
                return;
            }
            loadMoreBtn.addEventListener('click', function () {
                let page = loadMoreBtn.getAttribute('data-page');
                loadMoreBtn.disabled = true;
                fetch(`/movies?page=${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                })
                    .then((response) => {
                        if (!response.ok) {
                            throw new Error('Request failed: ' + response.status);
                        }
                        return response.json();
                    })
                    .then((data) => {
                        let movieList = document.querySelector('#movie-list');
                        if (data.html && data.html.trim() !== '') {
                            movieList.insertAdjacentHTML('beforeend', data.html);
                        }
                        // Update page for next load
                        loadMoreBtn.setAttribute('data-page', parseInt(page) + 1);
                        // Hide button if no more pages or empty html
                        if (!data.next_page || !data.html || data.html.trim() === '') {
                            loadMoreBtn.style.display = 'none';
                        } else {
                            loadMoreBtn.disabled = false;
                        }
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        loadMoreBtn.disabled = false;
                    });
            });
        });
    </script>
@endpush
