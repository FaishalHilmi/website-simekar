@extends('layouts.app')

@section('body')
    <div class="bg-white min-h-screen font-inter pt-10">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-blue-800">Berita Desa</h2>
            <p class="text-sm md:text-base">Memberikan informasi terbaru mengenai peristiwa, berita terkini, dan
                artikel-artikel jurnalistik dari Desa
                Mekar Sari.</p>

            <div class="card-section mt-6 w-full">
                <div class="card rounded-md flex flex-col sm:flex-row mb-4 shadow-md bg-gray-50">
                    <div class="w-full sm:w-[800px] h-full mb-4 md:mb-0 md:me-4">
                        <div class="image-news w-full h-full">
                            <img src="https://cdn.antaranews.com/cache/1200x800/2024/04/16/IMG_20240416_163020.jpg"
                                alt="news" class="object-cover w-full h-full rounded">
                        </div>
                    </div>
                    <div class="description-news p-4">
                        <a href="#" class="text-2xl font-bold text-black hover:underline block mb-1">Lorem ipsum dolor
                            sit
                            amet, consectetur adipisicing elit.</a>
                        <span class="text-[14px] text-gray-400 font-medium">1 hour ago</span>
                        <p class="mt-2 text-[14px] text-gray-500">
                            {{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim autem voluptatibus temporibus! Cumque dolores culpa consequuntur quisquam temporibus et officiis nemo, eveniet dolorum hic amet maxime dolore saepe distinctio quia, officia inventore corrupti. Eius optio autem assumenda laboriosam exercitationem illum cupiditate omnis, quis, explicabo dicta delectus quam voluptatibus est libero.', 300) }}
                        </p>
                        <div class="mt-4">
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
