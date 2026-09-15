<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Codflix</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.6.0-web/css/all.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <x-navbar />

    @yield ('content')

    <footer>
        <div class="text-white text-center">
            <p class="footer-title">&copy;
            <script>document.write(new Date().getFullYear());</script>
            Chirzin. All rights reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // const swiper = new Swiper('.swiper', {
        //     speed: 400,
        //     spaceBetween: 10,
        //     // slidesPerView: 5,
        //     autoplay: {
        //         delay: 3000, // Mengatur jeda antar slide dalam milidetik (3 detik)
        //         disableOnInteraction: false, // Swiper akan tetap autoplay meskipun pengguna berinteraksi dengan slide
        //     },
        //     pagination: {
        //         el: '.swiper-pagination',
        //         type: 'bullets',
        //         clickable: true,
        //     },
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     },
        //     breakpoints: {
        //         325: {
        //             slidesPerView: 2,
        //             spaceBetween: 20,
        //         },
        //         768: {
        //             slidesPerView: 4,
        //             spaceBetween: 40,
        //         },
        //         1024: {
        //             slidesPerView: 5,
        //             spaceBetween: 50,
        //         },
        //     },
        // });

        document.querySelectorAll('.swiper').forEach((el) => {
            new Swiper(el, {
                speed: 400,
                spaceBetween: 10,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true,
                },
                navigation: {
                    nextEl: el.querySelector('.swiper-button-next'),
                    prevEl: el.querySelector('.swiper-button-prev'),
                },
                breakpoints: {
                    325: { slidesPerView: 2, spaceBetween: 20 },
                    768: { slidesPerView: 4, spaceBetween: 40 },
                    1024: { slidesPerView: 5, spaceBetween: 50 },
                },
            });
        });
    </script>
    @stack ('script')
</body>
</html>
