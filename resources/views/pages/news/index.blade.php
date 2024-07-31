@extends('layouts.app')

@section('title', 'Halaman Berita')

@section('body')
    <div class="bg-white min-h-screen font-inter pt-10">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-blue-800">Berita Desa</h2>
            <p class="text-sm md:text-base">Memberikan informasi terbaru mengenai peristiwa, berita terkini, dan
                artikel-artikel jurnalistik dari Desa
                Mekar Sari.</p>

            @foreach ($news as $newsItem)
                <div class="card-section mt-6 w-full">
                    <div class="card rounded-md flex flex-col sm:flex-row mb-4 shadow-md bg-gray-50">
                        <!-- Image Section -->
                        <div class="w-full h-64 md:w-[400px] md:h-full mb-4 md:mb-0 md:me-4">
                            <div class="image-news w-full h-full">
                                <img src="{{ asset('storage/' . $newsItem->image) }}" alt="gambar-berita"
                                    class="object-cover w-full h-full rounded-t-md md:rounded-l-md md:rounded-t-none">
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="description-news p-4 flex flex-col justify-between">
                            <!-- Title and Date -->
                            <div>
                                <a href="{{ route('news.show', $newsItem->id) }}"
                                    class="text-2xl font-bold text-black hover:underline block">{{ $newsItem->title }}</a>
                                <span
                                    class="text-[14px] text-gray-400 font-medium">{{ $newsItem->created_at->format('l, d F Y') }}</span>
                            </div>
                            <!-- Description -->
                            <p class="mt-2 text-[14px] text-gray-500">
                                {{-- {!! nl2br(e(strip_tags(Str::limit($newsItem->description, 300)))) !!} --}}
                                {!! Str::limit($newsItem->description, 300) !!}
                            </p>
                            <!-- Button -->
                            <div class="mt-4">
                                <a href="{{ route('news.show', $newsItem->id) }}"
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
            @endforeach

            {{-- <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
          </div>
        </div>
  
        <!-- More products... -->
      </div> --}}
        </div>
    </div>
@endsection
