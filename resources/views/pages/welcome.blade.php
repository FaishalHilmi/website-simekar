@extends('layouts.app')

@section('title', 'Halaman Beranda')

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
                        @foreach ($members as $member)
                            {{-- {{ dd($member->image) }} --}}
                            <div class="swiper-slide">
                                <div class="group relative">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                        @if ($member->image == null)
                                            <img src="{{ asset('images/profil-image.png') }}" alt="Foto Perangkat Desa"
                                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                        @else
                                            <img src="{{ asset('storage/' . $member->image) }}" alt="Foto Perangkat Desa"
                                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                        @endif

                                    </div>
                                    <div class="mt-4 flex justify-center text-center">
                                        <div>
                                            <h3 class="text-gray-700 font-bold">
                                                {{ $member->name }}
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">{{ $member->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                @forelse ($news as $newsItem)
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded-lg shadow-lg bg-gray-50 border">
                            <a href={{ route('news.show', $newsItem->id) }} class="w-full overflow-hidden">
                                <img class="rounded-t-lg h-40 w-full object-cover"
                                    src={{ asset('storage/' . $newsItem->image) }} alt="news-image" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900">
                                        {{ Str::limit($newsItem->title, 40) }}
                                    </h5>
                                </a>
                                <span
                                    class="block text-sm text-gray-400 mb-2">{{ $newsItem->created_at->diffForHumans() }}</span>
                                <p class="text-sm text-gray-500 text-justify">
                                    {!! Str::limit($newsItem->description, 300) !!}
                                </p>
                                <a href={{ route('news.show', $newsItem->id) }}
                                    class="inline-flex mt-4 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                @empty
                    <div class="card w-full mx-auto">
                        <div class="card-image w-[400px] mx-auto">
                            <img src={{ asset('images/news-anchor.png') }} alt="image" class="w-full">
                        </div>
                        <div class="card-body text-center p-0 mb-4">
                            <h2 class="font-bold text-blue-800 text-2xl">Tidak Ada Berita Tersedia</h2>
                        </div>
                    </div>
                @endforelse
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
