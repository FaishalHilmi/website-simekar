@extends('layouts.app')

@section('body')
    <div class="bg-white font-inter pt-10">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-blue-800">Wirausaha</h2>
            <p class="text-sm md:text-base">Layanan ini menyediakan promosi produk UMKM Desa untuk meningkatkan perekonomian
                masyarakat setempat.</p>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">


                <div class="w-full max-w-sm bg-gray-50 border border-gray-200 rounded-lg shadow">
                    <div>
                        <img class="rounded-t-lg"
                            src="https://gobiz.co.id/pusat-pengetahuan/wp-content/uploads/2021/07/Farhan-Abas-Unsplash-UMKM-usaha-kecil-usaha-mikro-2.jpg"
                            alt="product image" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 hover:underline">Jeruk Peras Bang
                                Suep</h5>
                        </a>
                        <p class="mb-4 mt-2 text-sm">
                            {{ Str::limit(
                                'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem numquam iure, quaerat nisi corrupti maxime sint possimus alias consequatur iste.',
                                100,
                            ) }}
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="#"
                                class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Rincian
                                Produk</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
