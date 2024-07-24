@extends('layouts.app')

@section('body')
    <div class="bg-white min-h-screen font-inter tracking-tight px-5 md:px-[140px">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="mx-auto max-w-2xl py-32 sm:py-48">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-blue-900 sm:text-5xl">Selamat Datang di Website Resmi
                        Desa Mekar Sari</h1>
                    <p class="mt-6 text-base leading-6 text-gray-600">Kami bangga menjadi desa yang kaya akan budaya, sejarah
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
                <p class="text-center text-gray-500 mb-6">Melalui website ini, Anda dapat mengeksplorasi semua hal terkait
                    desa, mulai aspek pemerintahan, penduduk, demografi, potensi desa hingga berita terkini tentang desa.
                </p>
                <div class="card-eksplorasi grid grid-cols-4 gap-5">
                    <div class="card shadow-md rounded-md">
                        <div class="card-image">
                            <img src={{ asset('images/work-with-the-best.png') }} alt="image">
                        </div>
                        <div class="card-body text-center p-0 mb-4">
                            <h2 class="font-bold">Profile Desa</h2>
                        </div>
                    </div>
                    <div class="card shadow-md rounded-md">
                        <div class="card-image">
                            <img src={{ asset('images/work-with-the-best.png') }} alt="image">
                        </div>
                        <div class="card-body text-center p-0 mb-4">
                            <h2 class="font-bold">Profile Desa</h2>
                        </div>
                    </div>
                    <div class="card shadow-md rounded-md">
                        <div class="card-image">
                            <img src={{ asset('images/work-with-the-best.png') }} alt="image">
                        </div>
                        <div class="card-body text-center p-0 mb-4">
                            <h2 class="font-bold">Profile Desa</h2>
                        </div>
                    </div>
                    <div class="card shadow-md rounded-md">
                        <div class="card-image">
                            <img src={{ asset('images/work-with-the-best.png') }} alt="image">
                        </div>
                        <div class="card-body text-center p-0 mb-4">
                            <h2 class="font-bold">Profile Desa</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="wrapper bg-blue-950 my-24 rounded-2xl font-inter tracking-tight md:px-[140px] py-11">
        <div class="maps text-white mb-20">
            <div class="maps-header flex justify-between mb-6">
                <div class="maps-left-side">
                    <h1 class="text-3xl text-white font-bold mb-2">Peta Desa</h1>
                    <p>Menampilkan Peta Desa Mekar Sari</p>
                </div>
                <div class="maps-right-side">
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
        </div>
        <div class="structure bg-white rounded-lg min-w-full p-4">
            <div class="structure-wrapper p-4">
                <div class="structure-header flex justify-between mb-6 text-blue-800">
                    <div class="maps-left-side">
                        <h1 class="text-3xl text-blue-800 font-bold mb-2">SOTK</h1>
                        <p>Struktur Organisasi dan Tata Kerja Desa Mekar Sari</p>
                    </div>
                    <div class="maps-right-side">
                        <a href="#" class="t-side">
                            <a href="#"
                                class="rounded-full border bg-blue-900 text-white px-5 py-2.5 font-semibold hover:border-blue-900 hover:text-blue-900 hover:bg-transparent">Tampilkan
                                selengkapnya...</a>
                    </div>
                </div>
                <div class="swiper mySwiper w-full">
                    <div class="swiper-wrapper mb-10">
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
            </div>
        </div>
    </div>



    {{-- ini hubungi admin --}}

    {{-- <div class="fixed bottom-10 left-1/2 transform -translate-x-1/2">
    <a href="https://api.whatsapp.com/send/?phone=6285762649938&text=Selama%20Siang,%20saya%20ingin%20menanyakan%20informasi%20mengenai%20desa%20mekar%20sari.%20terima%20kasih.&type=phone_number&app_absent=0" target="_blank">
      <button class="bg-white text-black font-bold py-4 px-6 rounded-full shadow-lg z-index-0"> Hubungi Admin</button></a>
</div> --}}
@endsection
