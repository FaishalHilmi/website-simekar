@extends('layouts.app')

@section('body')
    <div class="h-full">
        <img src={{ asset('images/hero-mekar.png') }} alt="hero" class="w-full max-h-screen absolute z-0">
        <div class="min-h-screen font-inter tracking-tight px-5 md:px-[140px] relative">
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="mx-auto max-w-2xl py-32 sm:py-48">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-blue-900 sm:text-5xl">Selamat Datang di Website
                            Resmi
                            Desa Mekar Sari</h1>
                        <p class="mt-6 text-base leading-6 text-gray-600">Kami bangga menjadi desa yang kaya akan budaya,
                            sejarah
                            dan keindahan alam. Di sini, Anda dapat menemukan informasi terkini tentang desa kami, kegiatan
                            masyarakat dan berbagai potensi yang kami miliki.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="border border-blue-800 rounded-full text-blue-800 px-5 py-2.5 text-sm font-semibold hover:bg-blue-800 hover:text-white transition-transform duration-300 hover:scale-110">Baca
                                Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <div class="explore">
                    <h1 class="text-center text-blue-800 text-3xl font-bold mt-12 mb-1">Eksplorasi Desa</h1>
                    <p class="text-center text-gray-500 mb-10">Melalui website ini, Anda dapat mengeksplorasi semua hal
                        terkait
                        desa, mulai aspek pemerintahan, penduduk, demografi, potensi desa hingga berita terkini tentang
                        desa.
                    </p>
                    <div class="card-eksplorasi grid grid-cols-2 md:grid-cols-4 gap-5 text-blue-900">
                        <div class="card shadow-md rounded-md">
                            <div class="card-image">
                                <img src={{ asset('images/get-personalised-candidate-recommendations.png') }}
                                    alt="image">
                            </div>
                            <div class="card-body text-center p-0 mb-4">
                                <h2 class="font-bold">Profile Desa</h2>
                            </div>
                        </div>
                        <div class="card shadow-md rounded-md">
                            <div class="card-image">
                                <img src={{ asset('images/digital-nomad.png') }} alt="image">
                            </div>
                            <div class="card-body text-center p-0 mb-4">
                                <h2 class="font-bold">Wisata Desa</h2>
                            </div>
                        </div>
                        <div class="card shadow-md rounded-md">
                            <div class="card-image">
                                <img src={{ asset('images/black-friday-sale.png') }} alt="image">
                            </div>
                            <div class="card-body text-center p-0 mb-4">
                                <h2 class="font-bold">Wirausaha Desa</h2>
                            </div>
                        </div>
                        <div class="card shadow-md rounded-md">
                            <div class="card-image">
                                <img src={{ asset('images/news-anchor.png') }} alt="image">
                            </div>
                            <div class="card-body text-center p-0 mb-4">
                                <h2 class="font-bold">Berita Desa</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="wrapper bg-blue-950 my-24 rounded-2xl font-inter tracking-tight px-5 md:px-[140px] py-11">
        <div class="maps text-white mb-20">
            <div class="maps-header flex justify-between mb-6">
                <div class="maps-left-side">
                    <h1 class="text-3xl text-white font-bold mb-2">Peta Desa</h1>
                    <p>Menampilkan Peta Desa Mekar Sari</p>
                </div>
                <div class="maps-right-side hidden md:block">
                    <a href="#"
                        class="rounded-full border bg-white text-blue-800 px-5 py-2.5 font-semibold hover:border-white hover:text-white hover:bg-transparent">Tampilkan
                        di Google Maps</a>
                </div>
            </div>
            <div class="w-full border-white border-4 rounded-xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31858.384855550383!2d98.67683257212242!3d3.5183933493502217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313af26de1a8ab%3A0xb7b86d3d22ab12f7!2sMekar%20Sari%2C%20Kec.%20Deli%20Tua%2C%20Kabupaten%20Deli%20Serdang%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1721652423599!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-96 rounded-lg"></iframe>
            </div>
            <div class="mt-4 flex justify-items-stretch w-full md:hidden">
                <a href="#" class="text-sm text-center border-2 border-white py-2 px-4 w-full rounded-md">Tampilkan di
                    Google Maps</a>
            </div>
        </div>
        <div class="structure bg-white rounded-lg min-w-full p-4">
            <div class="structure-wrapper p-4">
                <div class="structure-header flex justify-between mb-6 text-blue-800">
                    <div class="maps-left-side">
                        <h1 class="text-3xl text-blue-800 font-bold mb-2">SOTK</h1>
                        <p>Struktur Organisasi dan Tata Kerja Desa Mekar Sari</p>
                    </div>
                    <div class="maps-right-side hidden md:block">
                        <a href="#"
                            class="rounded-full border bg-blue-900 text-white px-5 py-2.5 font-semibold hover:border-blue-900 hover:text-blue-900 hover:bg-transparent">Tampilkan
                            selengkapnya</a>
                    </div>
                </div>
                <div class="swiper mySwiper w-full">
                    <div class="swiper-wrapper mb-14">
                        <div class="swiper-slide">
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXk5ueutLeqsbTn6eqpr7Pj5ebJzc/f4eKwtrnZ3N26v8HV2NnCxsissrbR1Na2vL6/w8bGy8y/WgIaAAAFJ0lEQVR4nO2d25arIAxAheBdQf//Z4+WttNO7alCUoKT/dJX9yIkoJAWhSAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiD8YQBSPwEVsKi1vbVVZW3flnAu08WmnzulF8aFy6+b+/IsllBXblFSvxhH46o6f0kA68yL3d1SN1WRtSMU1ajf6Xm0nst8HaF6Dc6tgRwyHUfo1Q4/72gzVISy+xCfT7Hq6twcwe4cv7tjlZciDAcG8KrYZaXoDgsus7EpUz/2bsrmuN/Fsc1kGOuDU/AHnYdiHRChWSmW4X4XxdTP/5nAOXhjrFMLfABcnKBSTWqF/xNQB19gXRehjxfkvbopEQSVMnyzTfwk9DRcBxEsyhAucTpzVQxey7wo8iwZMKAZMs2nMau137Bc2sCEJ6iUYziItcE0ZDiImLNwheFMRJyFK+zSKVotvDFyq4lYy5kHRWaGmKXCo/vUTk9AhZtnVgZWg4gfpAusDEvUYujhtYnCzqQrI6edMHa593Aq+iTTkNVEBIIg5bWswV113w0ZVUSKRMMq1VDU+xU+NZ8mlXJKptCRCDJ6q0hULBiVC4j83vQOLYZfg8wwtdgdoBHkZChRGojhY3j+anH+in/+VdvpV97n3z0VLY2hTe31AM0en9FbDJpywenLBQwUhnxS6cLRU9174JRo/sJbfYqVKadpSFPzJ1aG5/9CShCmvIKUIExHRovSK2c/bYJe9Bke+zr9qa8/cHLv/KcvUd9lsBxCrJP6K4ZdIvWgnd5jWAuvnP42Alay4bVtegYlTvnetliBKT6fMs2jNxD2GKkVPhF3hZTjivuFuGyTxUXgGEXTZyBYQMRt9SwEF+pQwRxC1FM2QcOYU38TmI53/nCpH/oYh1c3rO83bwLlkf4muskpQm8sw7i7i1J2A+gBmHd1wjJDvt2+oJz1h1gd9ZBjgP4AhXXvB3LtSJfv+N2BenZmw3I0zdzm31XwAkBpB3ftC3ntDekGe4KmiY/Aotn2tlqwfVufrLvnA3BWNdgi9UOhcBGpl+Cch6lzrvE4103DUF170eaqeumqa+fJKXNJMa+pdM03RjfdYPNrurvKVUNjtsQ2iuKiOnZzn0v2ufQM3qx/Hz2biX8BAWg3ewbv1tTN0PNtiL3oDSrc7oY2neW4klv1xng9z6idZdZ4F8qqwdLzaN31bKIVoO/eN7SOkFQ89h0AtiE5A63WaJ2S7x2hmD817I5Du6TvUBc/3NnHzBH2NSTP1xHs3obkCI7d9+cjtGT5ZRPz5U/fUB5/ax/JqL7ZmR697dUudPet8nisYz6q43eGEaXPbKhi9w1BhE7B4YyKunBA4LdPPAztRxyguYZ3TJHyHgZUJLfwDkL4Hwowpx9BD9EKB1IViVdoDm1AlzjHPEKhCI6RIMXZImaC6zFbXEVWIerBDdSAA0D0YJ7T5FEHX8ET7HkK4p2Xxr8fisSItICj6q+DAM6GEeP4PRkY2SblhncHGFOR8QgqjMYLVA2S0Ii+5sZgy/uByDhlnEdvmKg+PVCxH0IV1/OMql0gKjHJJo8hjOkvAbwrxY3wU+KH/w82GcGG/BOpR4emU/618EZgTaRp4EVC6AI8myEMLRi8NxXPBN3gzyhIA8M0k2LoGUM2+zT/6EBFwBubfMq9J8AQtWUQOQETMZsFjSegfx3NX8eQEVAR2b4GfsPxVNPnlWgClqZJDnZFcHhVA/N6mScjzNEhLN7cN2NLgKAgCIIgCIIgCIIgCILwTf4BpTlWa8VjFvAAAAAASUVORK5CYII="
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-center text-center">
                                    <div>
                                        <h3 class="text-gray-700 font-bold">
                                            Ferdinan Irfan
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Sekretaris Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXk5ueutLeqsbTn6eqpr7Pj5ebJzc/f4eKwtrnZ3N26v8HV2NnCxsissrbR1Na2vL6/w8bGy8y/WgIaAAAFJ0lEQVR4nO2d25arIAxAheBdQf//Z4+WttNO7alCUoKT/dJX9yIkoJAWhSAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiD8YQBSPwEVsKi1vbVVZW3flnAu08WmnzulF8aFy6+b+/IsllBXblFSvxhH46o6f0kA68yL3d1SN1WRtSMU1ajf6Xm0nst8HaF6Dc6tgRwyHUfo1Q4/72gzVISy+xCfT7Hq6twcwe4cv7tjlZciDAcG8KrYZaXoDgsus7EpUz/2bsrmuN/Fsc1kGOuDU/AHnYdiHRChWSmW4X4XxdTP/5nAOXhjrFMLfABcnKBSTWqF/xNQB19gXRehjxfkvbopEQSVMnyzTfwk9DRcBxEsyhAucTpzVQxey7wo8iwZMKAZMs2nMau137Bc2sCEJ6iUYziItcE0ZDiImLNwheFMRJyFK+zSKVotvDFyq4lYy5kHRWaGmKXCo/vUTk9AhZtnVgZWg4gfpAusDEvUYujhtYnCzqQrI6edMHa593Aq+iTTkNVEBIIg5bWswV113w0ZVUSKRMMq1VDU+xU+NZ8mlXJKptCRCDJ6q0hULBiVC4j83vQOLYZfg8wwtdgdoBHkZChRGojhY3j+anH+in/+VdvpV97n3z0VLY2hTe31AM0en9FbDJpywenLBQwUhnxS6cLRU9174JRo/sJbfYqVKadpSFPzJ1aG5/9CShCmvIKUIExHRovSK2c/bYJe9Bke+zr9qa8/cHLv/KcvUd9lsBxCrJP6K4ZdIvWgnd5jWAuvnP42Alay4bVtegYlTvnetliBKT6fMs2jNxD2GKkVPhF3hZTjivuFuGyTxUXgGEXTZyBYQMRt9SwEF+pQwRxC1FM2QcOYU38TmI53/nCpH/oYh1c3rO83bwLlkf4muskpQm8sw7i7i1J2A+gBmHd1wjJDvt2+oJz1h1gd9ZBjgP4AhXXvB3LtSJfv+N2BenZmw3I0zdzm31XwAkBpB3ftC3ntDekGe4KmiY/Aotn2tlqwfVufrLvnA3BWNdgi9UOhcBGpl+Cch6lzrvE4103DUF170eaqeumqa+fJKXNJMa+pdM03RjfdYPNrurvKVUNjtsQ2iuKiOnZzn0v2ufQM3qx/Hz2biX8BAWg3ewbv1tTN0PNtiL3oDSrc7oY2neW4klv1xng9z6idZdZ4F8qqwdLzaN31bKIVoO/eN7SOkFQ89h0AtiE5A63WaJ2S7x2hmD817I5Du6TvUBc/3NnHzBH2NSTP1xHs3obkCI7d9+cjtGT5ZRPz5U/fUB5/ax/JqL7ZmR697dUudPet8nisYz6q43eGEaXPbKhi9w1BhE7B4YyKunBA4LdPPAztRxyguYZ3TJHyHgZUJLfwDkL4Hwowpx9BD9EKB1IViVdoDm1AlzjHPEKhCI6RIMXZImaC6zFbXEVWIerBDdSAA0D0YJ7T5FEHX8ET7HkK4p2Xxr8fisSItICj6q+DAM6GEeP4PRkY2SblhncHGFOR8QgqjMYLVA2S0Ii+5sZgy/uByDhlnEdvmKg+PVCxH0IV1/OMql0gKjHJJo8hjOkvAbwrxY3wU+KH/w82GcGG/BOpR4emU/618EZgTaRp4EVC6AI8myEMLRi8NxXPBN3gzyhIA8M0k2LoGUM2+zT/6EBFwBubfMq9J8AQtWUQOQETMZsFjSegfx3NX8eQEVAR2b4GfsPxVNPnlWgClqZJDnZFcHhVA/N6mScjzNEhLN7cN2NLgKAgCIIgCIIgCIIgCILwTf4BpTlWa8VjFvAAAAAASUVORK5CYII="
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-center text-center">
                                    <div>
                                        <h3 class="text-gray-700 font-bold">
                                            Ferdinan Irfan
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Sekretaris Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXk5ueutLeqsbTn6eqpr7Pj5ebJzc/f4eKwtrnZ3N26v8HV2NnCxsissrbR1Na2vL6/w8bGy8y/WgIaAAAFJ0lEQVR4nO2d25arIAxAheBdQf//Z4+WttNO7alCUoKT/dJX9yIkoJAWhSAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiD8YQBSPwEVsKi1vbVVZW3flnAu08WmnzulF8aFy6+b+/IsllBXblFSvxhH46o6f0kA68yL3d1SN1WRtSMU1ajf6Xm0nst8HaF6Dc6tgRwyHUfo1Q4/72gzVISy+xCfT7Hq6twcwe4cv7tjlZciDAcG8KrYZaXoDgsus7EpUz/2bsrmuN/Fsc1kGOuDU/AHnYdiHRChWSmW4X4XxdTP/5nAOXhjrFMLfABcnKBSTWqF/xNQB19gXRehjxfkvbopEQSVMnyzTfwk9DRcBxEsyhAucTpzVQxey7wo8iwZMKAZMs2nMau137Bc2sCEJ6iUYziItcE0ZDiImLNwheFMRJyFK+zSKVotvDFyq4lYy5kHRWaGmKXCo/vUTk9AhZtnVgZWg4gfpAusDEvUYujhtYnCzqQrI6edMHa593Aq+iTTkNVEBIIg5bWswV113w0ZVUSKRMMq1VDU+xU+NZ8mlXJKptCRCDJ6q0hULBiVC4j83vQOLYZfg8wwtdgdoBHkZChRGojhY3j+anH+in/+VdvpV97n3z0VLY2hTe31AM0en9FbDJpywenLBQwUhnxS6cLRU9174JRo/sJbfYqVKadpSFPzJ1aG5/9CShCmvIKUIExHRovSK2c/bYJe9Bke+zr9qa8/cHLv/KcvUd9lsBxCrJP6K4ZdIvWgnd5jWAuvnP42Alay4bVtegYlTvnetliBKT6fMs2jNxD2GKkVPhF3hZTjivuFuGyTxUXgGEXTZyBYQMRt9SwEF+pQwRxC1FM2QcOYU38TmI53/nCpH/oYh1c3rO83bwLlkf4muskpQm8sw7i7i1J2A+gBmHd1wjJDvt2+oJz1h1gd9ZBjgP4AhXXvB3LtSJfv+N2BenZmw3I0zdzm31XwAkBpB3ftC3ntDekGe4KmiY/Aotn2tlqwfVufrLvnA3BWNdgi9UOhcBGpl+Cch6lzrvE4103DUF170eaqeumqa+fJKXNJMa+pdM03RjfdYPNrurvKVUNjtsQ2iuKiOnZzn0v2ufQM3qx/Hz2biX8BAWg3ewbv1tTN0PNtiL3oDSrc7oY2neW4klv1xng9z6idZdZ4F8qqwdLzaN31bKIVoO/eN7SOkFQ89h0AtiE5A63WaJ2S7x2hmD817I5Du6TvUBc/3NnHzBH2NSTP1xHs3obkCI7d9+cjtGT5ZRPz5U/fUB5/ax/JqL7ZmR697dUudPet8nisYz6q43eGEaXPbKhi9w1BhE7B4YyKunBA4LdPPAztRxyguYZ3TJHyHgZUJLfwDkL4Hwowpx9BD9EKB1IViVdoDm1AlzjHPEKhCI6RIMXZImaC6zFbXEVWIerBDdSAA0D0YJ7T5FEHX8ET7HkK4p2Xxr8fisSItICj6q+DAM6GEeP4PRkY2SblhncHGFOR8QgqjMYLVA2S0Ii+5sZgy/uByDhlnEdvmKg+PVCxH0IV1/OMql0gKjHJJo8hjOkvAbwrxY3wU+KH/w82GcGG/BOpR4emU/618EZgTaRp4EVC6AI8myEMLRi8NxXPBN3gzyhIA8M0k2LoGUM2+zT/6EBFwBubfMq9J8AQtWUQOQETMZsFjSegfx3NX8eQEVAR2b4GfsPxVNPnlWgClqZJDnZFcHhVA/N6mScjzNEhLN7cN2NLgKAgCIIgCIIgCIIgCILwTf4BpTlWa8VjFvAAAAAASUVORK5CYII="
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-center text-center">
                                    <div>
                                        <h3 class="text-gray-700 font-bold">
                                            Ferdinan Irfan
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Sekretaris Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXk5ueutLeqsbTn6eqpr7Pj5ebJzc/f4eKwtrnZ3N26v8HV2NnCxsissrbR1Na2vL6/w8bGy8y/WgIaAAAFJ0lEQVR4nO2d25arIAxAheBdQf//Z4+WttNO7alCUoKT/dJX9yIkoJAWhSAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiD8YQBSPwEVsKi1vbVVZW3flnAu08WmnzulF8aFy6+b+/IsllBXblFSvxhH46o6f0kA68yL3d1SN1WRtSMU1ajf6Xm0nst8HaF6Dc6tgRwyHUfo1Q4/72gzVISy+xCfT7Hq6twcwe4cv7tjlZciDAcG8KrYZaXoDgsus7EpUz/2bsrmuN/Fsc1kGOuDU/AHnYdiHRChWSmW4X4XxdTP/5nAOXhjrFMLfABcnKBSTWqF/xNQB19gXRehjxfkvbopEQSVMnyzTfwk9DRcBxEsyhAucTpzVQxey7wo8iwZMKAZMs2nMau137Bc2sCEJ6iUYziItcE0ZDiImLNwheFMRJyFK+zSKVotvDFyq4lYy5kHRWaGmKXCo/vUTk9AhZtnVgZWg4gfpAusDEvUYujhtYnCzqQrI6edMHa593Aq+iTTkNVEBIIg5bWswV113w0ZVUSKRMMq1VDU+xU+NZ8mlXJKptCRCDJ6q0hULBiVC4j83vQOLYZfg8wwtdgdoBHkZChRGojhY3j+anH+in/+VdvpV97n3z0VLY2hTe31AM0en9FbDJpywenLBQwUhnxS6cLRU9174JRo/sJbfYqVKadpSFPzJ1aG5/9CShCmvIKUIExHRovSK2c/bYJe9Bke+zr9qa8/cHLv/KcvUd9lsBxCrJP6K4ZdIvWgnd5jWAuvnP42Alay4bVtegYlTvnetliBKT6fMs2jNxD2GKkVPhF3hZTjivuFuGyTxUXgGEXTZyBYQMRt9SwEF+pQwRxC1FM2QcOYU38TmI53/nCpH/oYh1c3rO83bwLlkf4muskpQm8sw7i7i1J2A+gBmHd1wjJDvt2+oJz1h1gd9ZBjgP4AhXXvB3LtSJfv+N2BenZmw3I0zdzm31XwAkBpB3ftC3ntDekGe4KmiY/Aotn2tlqwfVufrLvnA3BWNdgi9UOhcBGpl+Cch6lzrvE4103DUF170eaqeumqa+fJKXNJMa+pdM03RjfdYPNrurvKVUNjtsQ2iuKiOnZzn0v2ufQM3qx/Hz2biX8BAWg3ewbv1tTN0PNtiL3oDSrc7oY2neW4klv1xng9z6idZdZ4F8qqwdLzaN31bKIVoO/eN7SOkFQ89h0AtiE5A63WaJ2S7x2hmD817I5Du6TvUBc/3NnHzBH2NSTP1xHs3obkCI7d9+cjtGT5ZRPz5U/fUB5/ax/JqL7ZmR697dUudPet8nisYz6q43eGEaXPbKhi9w1BhE7B4YyKunBA4LdPPAztRxyguYZ3TJHyHgZUJLfwDkL4Hwowpx9BD9EKB1IViVdoDm1AlzjHPEKhCI6RIMXZImaC6zFbXEVWIerBDdSAA0D0YJ7T5FEHX8ET7HkK4p2Xxr8fisSItICj6q+DAM6GEeP4PRkY2SblhncHGFOR8QgqjMYLVA2S0Ii+5sZgy/uByDhlnEdvmKg+PVCxH0IV1/OMql0gKjHJJo8hjOkvAbwrxY3wU+KH/w82GcGG/BOpR4emU/618EZgTaRp4EVC6AI8myEMLRi8NxXPBN3gzyhIA8M0k2LoGUM2+zT/6EBFwBubfMq9J8AQtWUQOQETMZsFjSegfx3NX8eQEVAR2b4GfsPxVNPnlWgClqZJDnZFcHhVA/N6mScjzNEhLN7cN2NLgKAgCIIgCIIgCIIgCILwTf4BpTlWa8VjFvAAAAAASUVORK5CYII="
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-center text-center">
                                    <div>
                                        <h3 class="text-gray-700 font-bold">
                                            Ferdinan Irfan
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Sekretaris Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXk5ueutLeqsbTn6eqpr7Pj5ebJzc/f4eKwtrnZ3N26v8HV2NnCxsissrbR1Na2vL6/w8bGy8y/WgIaAAAFJ0lEQVR4nO2d25arIAxAheBdQf//Z4+WttNO7alCUoKT/dJX9yIkoJAWhSAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiD8YQBSPwEVsKi1vbVVZW3flnAu08WmnzulF8aFy6+b+/IsllBXblFSvxhH46o6f0kA68yL3d1SN1WRtSMU1ajf6Xm0nst8HaF6Dc6tgRwyHUfo1Q4/72gzVISy+xCfT7Hq6twcwe4cv7tjlZciDAcG8KrYZaXoDgsus7EpUz/2bsrmuN/Fsc1kGOuDU/AHnYdiHRChWSmW4X4XxdTP/5nAOXhjrFMLfABcnKBSTWqF/xNQB19gXRehjxfkvbopEQSVMnyzTfwk9DRcBxEsyhAucTpzVQxey7wo8iwZMKAZMs2nMau137Bc2sCEJ6iUYziItcE0ZDiImLNwheFMRJyFK+zSKVotvDFyq4lYy5kHRWaGmKXCo/vUTk9AhZtnVgZWg4gfpAusDEvUYujhtYnCzqQrI6edMHa593Aq+iTTkNVEBIIg5bWswV113w0ZVUSKRMMq1VDU+xU+NZ8mlXJKptCRCDJ6q0hULBiVC4j83vQOLYZfg8wwtdgdoBHkZChRGojhY3j+anH+in/+VdvpV97n3z0VLY2hTe31AM0en9FbDJpywenLBQwUhnxS6cLRU9174JRo/sJbfYqVKadpSFPzJ1aG5/9CShCmvIKUIExHRovSK2c/bYJe9Bke+zr9qa8/cHLv/KcvUd9lsBxCrJP6K4ZdIvWgnd5jWAuvnP42Alay4bVtegYlTvnetliBKT6fMs2jNxD2GKkVPhF3hZTjivuFuGyTxUXgGEXTZyBYQMRt9SwEF+pQwRxC1FM2QcOYU38TmI53/nCpH/oYh1c3rO83bwLlkf4muskpQm8sw7i7i1J2A+gBmHd1wjJDvt2+oJz1h1gd9ZBjgP4AhXXvB3LtSJfv+N2BenZmw3I0zdzm31XwAkBpB3ftC3ntDekGe4KmiY/Aotn2tlqwfVufrLvnA3BWNdgi9UOhcBGpl+Cch6lzrvE4103DUF170eaqeumqa+fJKXNJMa+pdM03RjfdYPNrurvKVUNjtsQ2iuKiOnZzn0v2ufQM3qx/Hz2biX8BAWg3ewbv1tTN0PNtiL3oDSrc7oY2neW4klv1xng9z6idZdZ4F8qqwdLzaN31bKIVoO/eN7SOkFQ89h0AtiE5A63WaJ2S7x2hmD817I5Du6TvUBc/3NnHzBH2NSTP1xHs3obkCI7d9+cjtGT5ZRPz5U/fUB5/ax/JqL7ZmR697dUudPet8nisYz6q43eGEaXPbKhi9w1BhE7B4YyKunBA4LdPPAztRxyguYZ3TJHyHgZUJLfwDkL4Hwowpx9BD9EKB1IViVdoDm1AlzjHPEKhCI6RIMXZImaC6zFbXEVWIerBDdSAA0D0YJ7T5FEHX8ET7HkK4p2Xxr8fisSItICj6q+DAM6GEeP4PRkY2SblhncHGFOR8QgqjMYLVA2S0Ii+5sZgy/uByDhlnEdvmKg+PVCxH0IV1/OMql0gKjHJJo8hjOkvAbwrxY3wU+KH/w82GcGG/BOpR4emU/618EZgTaRp4EVC6AI8myEMLRi8NxXPBN3gzyhIA8M0k2LoGUM2+zT/6EBFwBubfMq9J8AQtWUQOQETMZsFjSegfx3NX8eQEVAR2b4GfsPxVNPnlWgClqZJDnZFcHhVA/N6mScjzNEhLN7cN2NLgKAgCIIgCIIgCIIgCILwTf4BpTlWa8VjFvAAAAAASUVORK5CYII="
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-center text-center">
                                    <div>
                                        <h3 class="text-gray-700 font-bold">
                                            Ferdinan Irfan
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Sekretaris Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXk5ueutLeqsbTn6eqpr7Pj5ebJzc/f4eKwtrnZ3N26v8HV2NnCxsissrbR1Na2vL6/w8bGy8y/WgIaAAAFJ0lEQVR4nO2d25arIAxAheBdQf//Z4+WttNO7alCUoKT/dJX9yIkoJAWhSAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiD8YQBSPwEVsKi1vbVVZW3flnAu08WmnzulF8aFy6+b+/IsllBXblFSvxhH46o6f0kA68yL3d1SN1WRtSMU1ajf6Xm0nst8HaF6Dc6tgRwyHUfo1Q4/72gzVISy+xCfT7Hq6twcwe4cv7tjlZciDAcG8KrYZaXoDgsus7EpUz/2bsrmuN/Fsc1kGOuDU/AHnYdiHRChWSmW4X4XxdTP/5nAOXhjrFMLfABcnKBSTWqF/xNQB19gXRehjxfkvbopEQSVMnyzTfwk9DRcBxEsyhAucTpzVQxey7wo8iwZMKAZMs2nMau137Bc2sCEJ6iUYziItcE0ZDiImLNwheFMRJyFK+zSKVotvDFyq4lYy5kHRWaGmKXCo/vUTk9AhZtnVgZWg4gfpAusDEvUYujhtYnCzqQrI6edMHa593Aq+iTTkNVEBIIg5bWswV113w0ZVUSKRMMq1VDU+xU+NZ8mlXJKptCRCDJ6q0hULBiVC4j83vQOLYZfg8wwtdgdoBHkZChRGojhY3j+anH+in/+VdvpV97n3z0VLY2hTe31AM0en9FbDJpywenLBQwUhnxS6cLRU9174JRo/sJbfYqVKadpSFPzJ1aG5/9CShCmvIKUIExHRovSK2c/bYJe9Bke+zr9qa8/cHLv/KcvUd9lsBxCrJP6K4ZdIvWgnd5jWAuvnP42Alay4bVtegYlTvnetliBKT6fMs2jNxD2GKkVPhF3hZTjivuFuGyTxUXgGEXTZyBYQMRt9SwEF+pQwRxC1FM2QcOYU38TmI53/nCpH/oYh1c3rO83bwLlkf4muskpQm8sw7i7i1J2A+gBmHd1wjJDvt2+oJz1h1gd9ZBjgP4AhXXvB3LtSJfv+N2BenZmw3I0zdzm31XwAkBpB3ftC3ntDekGe4KmiY/Aotn2tlqwfVufrLvnA3BWNdgi9UOhcBGpl+Cch6lzrvE4103DUF170eaqeumqa+fJKXNJMa+pdM03RjfdYPNrurvKVUNjtsQ2iuKiOnZzn0v2ufQM3qx/Hz2biX8BAWg3ewbv1tTN0PNtiL3oDSrc7oY2neW4klv1xng9z6idZdZ4F8qqwdLzaN31bKIVoO/eN7SOkFQ89h0AtiE5A63WaJ2S7x2hmD817I5Du6TvUBc/3NnHzBH2NSTP1xHs3obkCI7d9+cjtGT5ZRPz5U/fUB5/ax/JqL7ZmR697dUudPet8nisYz6q43eGEaXPbKhi9w1BhE7B4YyKunBA4LdPPAztRxyguYZ3TJHyHgZUJLfwDkL4Hwowpx9BD9EKB1IViVdoDm1AlzjHPEKhCI6RIMXZImaC6zFbXEVWIerBDdSAA0D0YJ7T5FEHX8ET7HkK4p2Xxr8fisSItICj6q+DAM6GEeP4PRkY2SblhncHGFOR8QgqjMYLVA2S0Ii+5sZgy/uByDhlnEdvmKg+PVCxH0IV1/OMql0gKjHJJo8hjOkvAbwrxY3wU+KH/w82GcGG/BOpR4emU/618EZgTaRp4EVC6AI8myEMLRi8NxXPBN3gzyhIA8M0k2LoGUM2+zT/6EBFwBubfMq9J8AQtWUQOQETMZsFjSegfx3NX8eQEVAR2b4GfsPxVNPnlWgClqZJDnZFcHhVA/N6mScjzNEhLN7cN2NLgKAgCIIgCIIgCIIgCILwTf4BpTlWa8VjFvAAAAAASUVORK5CYII="
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-center text-center">
                                    <div>
                                        <h3 class="text-gray-700 font-bold">
                                            Ferdinan Irfan
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Sekretaris Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXk5ueutLeqsbTn6eqpr7Pj5ebJzc/f4eKwtrnZ3N26v8HV2NnCxsissrbR1Na2vL6/w8bGy8y/WgIaAAAFJ0lEQVR4nO2d25arIAxAheBdQf//Z4+WttNO7alCUoKT/dJX9yIkoJAWhSAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiD8YQBSPwEVsKi1vbVVZW3flnAu08WmnzulF8aFy6+b+/IsllBXblFSvxhH46o6f0kA68yL3d1SN1WRtSMU1ajf6Xm0nst8HaF6Dc6tgRwyHUfo1Q4/72gzVISy+xCfT7Hq6twcwe4cv7tjlZciDAcG8KrYZaXoDgsus7EpUz/2bsrmuN/Fsc1kGOuDU/AHnYdiHRChWSmW4X4XxdTP/5nAOXhjrFMLfABcnKBSTWqF/xNQB19gXRehjxfkvbopEQSVMnyzTfwk9DRcBxEsyhAucTpzVQxey7wo8iwZMKAZMs2nMau137Bc2sCEJ6iUYziItcE0ZDiImLNwheFMRJyFK+zSKVotvDFyq4lYy5kHRWaGmKXCo/vUTk9AhZtnVgZWg4gfpAusDEvUYujhtYnCzqQrI6edMHa593Aq+iTTkNVEBIIg5bWswV113w0ZVUSKRMMq1VDU+xU+NZ8mlXJKptCRCDJ6q0hULBiVC4j83vQOLYZfg8wwtdgdoBHkZChRGojhY3j+anH+in/+VdvpV97n3z0VLY2hTe31AM0en9FbDJpywenLBQwUhnxS6cLRU9174JRo/sJbfYqVKadpSFPzJ1aG5/9CShCmvIKUIExHRovSK2c/bYJe9Bke+zr9qa8/cHLv/KcvUd9lsBxCrJP6K4ZdIvWgnd5jWAuvnP42Alay4bVtegYlTvnetliBKT6fMs2jNxD2GKkVPhF3hZTjivuFuGyTxUXgGEXTZyBYQMRt9SwEF+pQwRxC1FM2QcOYU38TmI53/nCpH/oYh1c3rO83bwLlkf4muskpQm8sw7i7i1J2A+gBmHd1wjJDvt2+oJz1h1gd9ZBjgP4AhXXvB3LtSJfv+N2BenZmw3I0zdzm31XwAkBpB3ftC3ntDekGe4KmiY/Aotn2tlqwfVufrLvnA3BWNdgi9UOhcBGpl+Cch6lzrvE4103DUF170eaqeumqa+fJKXNJMa+pdM03RjfdYPNrurvKVUNjtsQ2iuKiOnZzn0v2ufQM3qx/Hz2biX8BAWg3ewbv1tTN0PNtiL3oDSrc7oY2neW4klv1xng9z6idZdZ4F8qqwdLzaN31bKIVoO/eN7SOkFQ89h0AtiE5A63WaJ2S7x2hmD817I5Du6TvUBc/3NnHzBH2NSTP1xHs3obkCI7d9+cjtGT5ZRPz5U/fUB5/ax/JqL7ZmR697dUudPet8nisYz6q43eGEaXPbKhi9w1BhE7B4YyKunBA4LdPPAztRxyguYZ3TJHyHgZUJLfwDkL4Hwowpx9BD9EKB1IViVdoDm1AlzjHPEKhCI6RIMXZImaC6zFbXEVWIerBDdSAA0D0YJ7T5FEHX8ET7HkK4p2Xxr8fisSItICj6q+DAM6GEeP4PRkY2SblhncHGFOR8QgqjMYLVA2S0Ii+5sZgy/uByDhlnEdvmKg+PVCxH0IV1/OMql0gKjHJJo8hjOkvAbwrxY3wU+KH/w82GcGG/BOpR4emU/618EZgTaRp4EVC6AI8myEMLRi8NxXPBN3gzyhIA8M0k2LoGUM2+zT/6EBFwBubfMq9J8AQtWUQOQETMZsFjSegfx3NX8eQEVAR2b4GfsPxVNPnlWgClqZJDnZFcHhVA/N6mScjzNEhLN7cN2NLgKAgCIIgCIIgCIIgCILwTf4BpTlWa8VjFvAAAAAASUVORK5CYII="
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-center text-center">
                                    <div>
                                        <h3 class="text-gray-700 font-bold">
                                            Ferdinan Irfan
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Sekretaris Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="mt-2 w-full flex justify-items-stretch md:hidden">
                    <a href="#"
                        class="text-sm text-center text-blue-700 border-2 border-blue-800 py-2 px-4 w-full rounded-md">Lihat
                        Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="news md:my-14 font-inter tracking-tight px-5 md:px-[140px]">
        <div class="header mb-6">
            <h1 class="text-3xl text-blue-800 font-bold mb-2">Berita Desa</h1>
            <span class="block">Menginformasikan peristiwa terbaru, berita
                terkini dan
                artikel jurnalistik dari Desa Mekar Sari</span>
        </div>
        <div class="swiper myNews w-full">
            <div class="swiper-wrapper mb-14">
                <div class="swiper-slide">
                    <div class="max-w-sm rounded-lg shadow-lg bg-gray-50 border">
                        <a href="#" class="w-full">
                            <img class="rounded-t-lg w-full object-cover"
                                src="data:image/jpeg;base64,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"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                    acquisitions 2021</h5>
                            </a>
                            <span class="block text-sm text-gray-400 mb-2">24-12-2003</span>
                            <p class="mb-3 text-sm text-gray-500">
                                {{ Str::limit(
                                    'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.',
                                    100,
                                ) }}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Selengkapnya
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    {{-- ini hubungi admin --}}

    {{-- <div class="fixed bottom-10 left-1/2 transform -translate-x-1/2">
    <a href="https://api.whatsapp.com/send/?phone=6285762649938&text=Selama%20Siang,%20saya%20ingin%20menanyakan%20informasi%20mengenai%20desa%20mekar%20sari.%20terima%20kasih.&type=phone_number&app_absent=0" target="_blank">
      <button class="bg-white text-black font-bold py-4 px-6 rounded-full shadow-lg z-index-0"> Hubungi Admin</button></a>
</div> --}}
@endsection
