@extends ('layouts.app')

@section ('content')
    <h3 class="category-title">Keyword : {{ $keyword }}</h3>
    <div class="row g-3 card-movie-list">
        <x-movie-list :movies="$movies" />
    </div>
    @if ($movies->isEmpty())
        <div class="text-center text-white py-5">
            <p class="mb-1">Tidak ditemukan hasil untuk "{{ $keyword }}".</p>
            <p class="text-white-50">Coba kata kunci lain atau cek ejaan judul film.</p>
        </div>
    @endif
@endsection
