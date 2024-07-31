@extends('layouts.app')

@section('title', 'Halaman Wirausaha')

@section('body')
    <div class="bg-white font-inter pt-10">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-blue-800">Wirausaha</h2>
            <p class="text-sm md:text-base">Layanan ini menyediakan promosi produk UMKM Desa untuk meningkatkan perekonomian
                masyarakat setempat.</p>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                @forelse ($commerces as $commerce)
                    <div class="w-full max-w-sm bg-gray-50 border border-gray-200 rounded-lg shadow">
                        <div class="w-full">
                            @if (isset($commerce->image[0]))
                                <img class="rounded-t-lg w-full object-cover h-60"
                                    src="{{ asset('storage/' . $commerce->image[0]) }}" alt="product image" />
                            @else
                                <img class="rounded-t-lg" src="{{ asset('images/default-image.png') }}"
                                    alt="default image" />
                            @endif
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 hover:underline">
                                    {{ $commerce->title }}</h5>
                            </a>
                            <p class="mb-4 mt-2 text-sm">
                                {!! Str::limit($commerce->description, 100) !!}
                            </p>
                            <div class="flex mt-3 items-center justify-between">
                                <a href="{{ route('wirausaha.show', $commerce->id) }}"
                                    class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail
                                    Produk</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card w-full mx-auto">
                        <div class="card-image w-[400px] mx-auto">
                            <img src="{{ asset('images/news-anchor.png') }}" alt="image" class="w-full">
                        </div>
                        <div class="card-body text-center p-0 mb-4">
                            <h2 class="font-bold text-blue-800 text-2xl">Tidak Ada Penjualan</h2>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
