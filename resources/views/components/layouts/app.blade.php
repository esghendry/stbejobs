<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire --}}
    @livewireStyles

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


</head>

<body class="font-roboto bg-gray-50 flex flex-col w-full min-h-screen">

    {{-- Livewire --}}
    @livewireScripts

    <header class="sticky top-0 z-40 w-full bg-gray-100 shadow-md">
        <nav>
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center mx-auto">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="/" wire:navigate="">
                                <img src="https://esg.works/img/logo/x75/staffing-be-x75.png" alt="STBE" class="inline-block h-12">
                            </a>
                        </div>
                        <!-- Navigation Links -->
                    </div>
                    <!-- Hamburger -->
                </div>
            </div>
        </nav>
    </header>

    @livewire('wire-elements-modal')

    <main class="flex-grow w-full overflow-hidden">
        {{ $slot }}
    </main>

    <footer class="text-base font-light text-white bg-staffing-dark-gray" style="border-bottom: 10px solid #dc3738;">
        <div class="container px-4 py-8 mx-auto font-thin max-w-7xl">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mb-8 md:w-1/3 md:mb-0">
                    <div class="text-center">
                        <img src="//staffing-esg.be/img/logo-ondark.svg" alt="Staffing ESG Logo"
                            class="relative inline-block h-16 mb-2 -mt-4">
                        <p class="mb-2">
                            <strong class="text-white">Staffing</strong>, een <a href="https://ESG.works"
                                target="_blank" class="text-white underline hover:no-underline">ESG Company</a>
                        </p>
                        <p class="mb-1">Luxemburgstraat 2, Transportzone Meer</p>
                        <p class="mb-1">Hoogstraten, België</p>
                        <p class="mt-4 text-sm">Erkenningsnummer: VG/ 1078/BU</p>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 md:w-1/6 md:mb-0">
                    <div class="text-center md:text-right md:pb-12">
                        <strong class="font-black text-white">Staffing.</strong>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 text-center md:text-left md:w-1/4 md:mb-0">
                    <div class="md:pb-12">
                        <a href="//staffing-esg.be/home"
                            class="block text-white underline hover:no-underline">startpagina</a>
                        <a href="//staffing-esg.be/uitzendkracht"
                            class="block text-white underline hover:no-underline">voor jou als uitzendkracht</a>
                        <a href="//staffing-esg.be/werkgever" class="block text-white underline hover:no-underline">voor
                            u als werkgever</a>
                        <a href="//staffing-esg.be/jobs" class="block text-white underline hover:no-underline">jobs</a>
                        <a href="//staffing-esg.be/artikelen"
                            class="block text-white underline hover:no-underline">artikelen</a>
                        <a href="//staffing-esg.be/contact"
                            class="block text-white underline hover:no-underline">contact</a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/4">
                    <div class="text-center md:pb-12">
                        <a href="tel:003238085410" class="block text-white underline hover:no-underline">+32 3808
                            5410</a>
                        <a href="mailto:hello@staffing-esg.be"
                            class="block text-white underline hover:no-underline">hello@staffing-esg.be</a>
                        <div class="mt-4">
                            <a class="inline-block w-12 h-12 bg-no-repeat bg-cover social-linkedin"
                                href="https://www.linkedin.com/company/staffing-esg/" target="_blank"></a>
                            <a class="inline-block w-12 h-12 bg-no-repeat bg-cover social-facebook"
                                href="https://facebook.com/staffingesg" target="_blank"></a>
                            <a class="inline-block w-12 h-12 bg-no-repeat bg-cover social-instagram"
                                href="https://www.instagram.com/staffingesg/" target="_blank"></a>
                        </div>
                        <div class="mt-4">
                            <a href="https://cms.staffing-esg.be/algemene-voorwaarden"
                                class="block text-white underline hover:no-underline" target="_blank">voorwaarden &amp;
                                privacybeleid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>