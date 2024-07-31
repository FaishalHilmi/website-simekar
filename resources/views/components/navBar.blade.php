<header class="fixed inset-x-0 top-0 z-50 md:py-2 bg-white">
    <nav x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center justify-between w-full">
                    <div>
                        {{-- <h1
                            class="text-xl pe-4 font-extrabold font-inter italic text-transparent bg-clip-text bg-gradient-to-br from-blue-800 to-blue-600">
                            SIMEKAR
                        </h1> --}}
                        <img src={{ asset('images/logo-simekar.png') }} alt="logo" class="w-44 md:w-56">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            {{-- <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700"
                                aria-current="page">Dashboard</a> --}}
                            <a href="/"
                                class="rounded-md px-3 py-2 text-sm font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Beranda</a>
                            <a href="/profil-desa"
                                class="rounded-md px-3 py-2 text-sm font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Profil
                                Desa</a>
                            <a href="/wirausaha"
                                class="rounded-md px-3 py-2 text-sm font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Wirausaha</a>
                            <a href="/berita"
                                class="rounded-md px-3 py-2 text-sm font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Berita</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md bg-blue-900 p-2 text-white hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-700"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                {{-- <a href="#"
                    class="block rounded-md text-blue-800 hover:bg-sky-100 hover:text-blue-700 px-3 py-2 text-base font-medium"
                    aria-current="page">Dashboard</a> --}}
                <a href="/"
                    class="block rounded-md px-3 py-2 text-base font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Beranda</a>
                <a href="/profil-desa"
                    class="block rounded-md px-3 py-2 text-base font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Profil
                    Desa</a>
                <a href="/wirausaha"
                    class="block rounded-md px-3 py-2 text-base font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Wirausaha</a>
                <a href="/berita"
                    class="block rounded-md px-3 py-2 text-base font-medium text-blue-800 hover:bg-sky-100 hover:text-blue-700">Berita</a>
            </div>
        </div>
    </nav>

</header>
