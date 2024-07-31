@extends('layouts.app')

@section('title', 'Halaman Detail Berita')

@section('body')
    <div class="bg-white min-h-screen font-inter pt-10">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="news">
                <div class="mb-10 md:mb-14">
                    <a href="/" class="bg-blue-800 text-white rounded-md py-3 px-4 font-medium text-sm">
                        <i class="bi bi-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="header mb-4 md:mb-6">
                    <h1 class="font-bold text-gray-900 text-xl md:text-3xl mb-1">{{ $news->title }}</h1>
                    <span class="text-sm font-medium">{{ $news->created_at->format('l, d F Y') }}</span>
                </div>
                <div class="image mb-4 md:mb-6">
                    <div class="image-wrapper w-full">
                        <img src={{ asset('storage/' . $news->image) }} alt="news image"
                            class="w-full object-cover rounded-lg h-56 md:h-72">
                    </div>
                </div>
                <div class="description text-justify flex flex-col gap-3 text-gray-700">
                    <p>{!! $news->description !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
