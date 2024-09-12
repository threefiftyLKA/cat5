<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="{{asset('plugins/alpineCopy/alpine-clipboard.js')}}" defer></script>
  @livewireStyles
</head>
<body>
    <nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="flex items-center justify-between border-b border-slate-300 px-6 py-4" aria-label="penguin ui menu">
        <!-- Brand Logo -->
        <a href="/" class="text-2xl font-bold text-black">
            <img src="{{asset('images/cat5resources_logo.png')}}">
            <!-- <img src="./your-logo.svg" alt="brand logo" class="w-10" /> -->
        </a>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button" class="flex text-slate-700" aria-label="mobile menu" aria-controls="mobileMenu">
            <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- Mobile Menu -->
        <ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-slate-300 rounded-b-xl border-b border-slate-300 bg-slate-100 px-6 pb-6 pt-20">
            <li class="py-4 text-center"><a href="/fuel-report" class="w-full text-lg font-medium text-slate-700 focus:underline text-center">Fuel Report</a></li>
            <li class="py-4 text-center"><a href="/generator-deploy" class="w-full text-lg font-medium text-slate-700 focus:underline text-center">Gen Deploy</a></li>
            <li class="py-4 text-center"><a href="/generator-recovery" class="w-full text-lg font-medium text-slate-700 focus:underline text-center">Gen Recovery</a></li>
        </ul>
    </nav>

    @yield('content')

    <script src="{{asset('plugins/clipboardJS/clipboard.min.js')}}"></script>
    <script>
        var clipboard = new ClipboardJS('.copyBtn');

    </script>

    @livewireScripts
    </body>
</html>
