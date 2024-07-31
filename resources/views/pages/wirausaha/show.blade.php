@extends('layouts.app')

@section('title', 'Halaman Detail Wirausaha')

@section('body')
    <div class="bg-white min-h-screen font-inter pt-10">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="wirausaha">
                <div class="mb-10 md:mb-14">
                    <a href="/" class="bg-blue-800 text-white rounded-md py-3 px-4 font-medium text-sm">
                        <i class="bi bi-arrow-left"></i>
                        Kembali</a>
                </div>

                <div class="wirausaha-wrapper md:flex md:gap-6">
                    <div class="image mb-6 md:w-1/2">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper myWirausaha2 h-[300px] min-w-full mb-2">
                            <div class="swiper-wrapper">
                                @foreach ($commerce->image as $image)
                                    <div class="swiper-slide rounded overflow-hidden">
                                        <img class="rounded-t-lg object-cover w-full d-block"
                                            src="{{ asset('storage/' . $image) }}" alt="product image" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper myWirausaha min-w-full">
                            <div class="swiper-wrapper">
                                @foreach ($commerce->image as $image)
                                    <div class="swiper-slide rounded overflow-hidden">
                                        <img class="rounded-t-lg object-cover w-full h-[140px] d-block"
                                            src="{{ asset('storage/' . $image) }}" alt="product image" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="text-uppercase md:w-1/2">
                        <h1 class="text-gray-800 text-2xl md:text-3xl font-bold mb-4">{{ $commerce->title }}</h1>
                        <div class="description flex flex-col gap-2 text-gray-600 text-justify mb-6">
                            {!! $commerce->description !!}
                        </div>
                        <div class="button flex gap-2 md:gap-3">
                            <div class="whatsapp">
                                <a href="wa.me/{{ $commerce->contact }}" target="_blank"
                                    class="bg-green-200 py-2.5 px-4 rounded-md font-medium">
                                    <i class="bi bi-whatsapp text-green-600 me-1"></i>
                                    <span class="text-green-600">Beli Sekarang</span>
                                </a>
                            </div>
                            <div class="whatsapp">
                                <a href={{ $commerce->link_maps }} target="_blank"
                                    class="bg-blue-200 py-2.5 px-4 rounded-md font-medium">
                                    <i class="bi bi-geo-alt-fill text-blue-600 me-1"></i>
                                    <span class="text-blue-600">Google Maps</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
