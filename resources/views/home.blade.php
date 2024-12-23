<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi untuk teks */
        @keyframes slideIn {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounceButton {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Animasi CTA teks dan tombol */
        .cta-text {
            animation: slideIn 1s ease-out forwards;
        }

        .cta-button {
            animation: bounceButton 1s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-gray-900">
    <!-- Bagian Utama dengan tinggi yang pas -->
    <div class="mx-auto max-w-100% min-h-screen py-0 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                <defs>
                    <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                        <stop stop-color="#7775D6" />
                        <stop offset="1" stop-color="#E935C1" />
                    </radialGradient>
                </defs>
            </svg>
            <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                <h2 class="text-balance text-3xl font-semibold tracking-tight text-white sm:text-4xl">Selamat
                    Datang Di Website Rayon <span id="animated-text">Tajur 5</span></h2>
                <p class="mt-6 text-pretty text-lg/8 text-gray-300">Selamat datang di rumah kedua kita, Rayon Tajur 5.
                    Semoga Anda menemukan inspirasi, kebahagiaan, dan pengalaman tak terlupakan di sini. Mari bersama-sama
                    menciptakan kenangan indah!</p>
                <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                    <a href="{{route('index-rayon')}}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Bergabung</a>                    </div>
            </div>
            <div class="relative mt-16 h-80 lg:mt-8">
                <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="{{ asset('images/kebersamaan.webp') }}" alt="App screenshot" width="1824" height="1080">
            </div>
        </div>
    </div>

    <!-- CTA Section dengan Animasi -->
    <style>
        span {
            color: rgb(2, 116, 255);
        }

        #animated-text {
            animation: color-change 2s infinite alternate;
        }

        @keyframes color-change {
            0% {
                color: rgb(2, 116, 255);
            }

            100% {
                color: rgb(255, 255, 0);
            }
        }
    </style>
</body>

</html>
