@extends('layouts.app')

@section('body')
    <div class="bg-white font-inter pt-10">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-blue-800">Profil Desa</h2>
            <p class="text-sm md:text-base">Informasi Lengkap Mengenai Desa Mekar Sari</p>

            <div class="w-full mt-10">
                <div class="wrapper w-full">
                    <div class="visi-misi flex flex-col justify-center items-center gap-10 mb-10 md:mb-20">
                        <div class="logo-wrapper flex flex-col gap-4 items-center">
                            <div class="logo w-32 md:w-[200px] mx-auto mb-4 md:mb-0">
                                <img src={{ asset('images/logo-deli-serdang.png') }} alt="logo"
                                    class="w-full object-cover">
                            </div>
                            <div class="title text-center mb-10">
                                <span class="text-2xl md:text-4xl text-blue-800 font-bold block mb-2">DESA MEKAR SARI</span>
                                <span class="text-sm md:text-base">Kecataman Deli Tua, Kabupaten Deli Serdang,
                                    Provinsi
                                    Sumatera
                                    Utara</span>
                            </div>

                        </div>
                        <div class="visi-misi">
                            <div class="visi text-center mb-10">
                                <h1 class="text-3xl text-blue-800 font-bold mb-2">VISI</h1>
                                <span class="text-gray-900">"Mewujudkan Desa Mekar Sari yang Mandiri, Sejahtera, dan
                                    Berbudaya
                                    melalui Pengelolaan
                                    Sumber Daya yang Berkelanjutan dan Partisipasi Aktif Masyarakat."</span>
                            </div>
                            <div class="misi">
                                <h1 class="text-3xl text-blue-800 font-bold mb-4 text-center">MISI</h1>
                                <ol class="text-gray-900 list-decimal ms-6">
                                    <li>
                                        Meningkatkan kapasitas dan keterampilan masyarakat melalui pelatihan dan pendidikan,
                                        serta mempromosikan partisipasi aktif dalam pembangunan desa.
                                    </li>
                                    <li>
                                        Mendorong pengembangan usaha mikro, kecil, dan menengah (UMKM) serta menciptakan
                                        peluang
                                        kerja bagi masyarakat desa melalui inovasi dan pemanfaatan teknologi.
                                    </li>
                                    <li>
                                        Mengelola sumber daya alam secara berkelanjutan dan memperkuat upaya konservasi
                                        lingkungan untuk menjaga ekosistem desa yang sehat.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="peta-lokasi mb-10 md:mb-20">
                        <div class="title mb-10">
                            <h1 class="text-2xl md:text-4xl text-blue-800 font-bold mb-2">Peta Desa</h1>
                            <span class="text-sm md:text-base">Peta Wilayah Mekar Sari</span>
                        </div>
                        <div class="flex flex-col md:flex-row gap-5">
                            <div class="peta-wrapper md:w-1/2">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15929.22023225502!2d98.68352929352203!3d3.516766393319871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313af26de1a8ab%3A0xb7b86d3d22ab12f7!2sMekar%20Sari%2C%20Kec.%20Deli%20Tua%2C%20Kabupaten%20Deli%20Serdang%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1721988557812!5m2!1sid!2sid"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="w-full h-80 rounded-lg"></iframe>
                            </div>
                            <div class="batas-desa-wrapper w-full md:w-1/2 bg-gray-50 border shadow p-6 rounded-lg">
                                <div class="wrapper w-full">
                                    <div class="title mb-2">
                                        <h1 class="text-blue-800 text-xl md:text-2xl font-bold">Batas Desa Mekar Sari
                                        </h1>
                                    </div>
                                    <hr>
                                    <div class="batas my-2 grid grid-cols-2">
                                        <div class="utara mb-4">
                                            <h1 class="font-semibold text-blue-800 text-xl mb-1">Utara</h1>
                                            <span class="text-gray-700 font-medium">Kedai Durian</span>
                                        </div>
                                        <div class="timur">
                                            <h1 class="font-semibold text-blue-800 text-xl mb-1">Timur</h1>
                                            <span class="text-gray-700 font-medium">Patumbak</span>
                                        </div>
                                        <div class="selatan">
                                            <h1 class="font-semibold text-blue-800 text-xl mb-1">Selatan</h1>
                                            <span class="text-gray-700 font-medium">Deli Tua</span>
                                        </div>
                                        <div class="barat">
                                            <h1 class="font-semibold text-blue-800 text-xl mb-1">Barat</h1>
                                            <span class="text-gray-700 font-medium">Namorambe</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="deskripsi">
                                        <div class="luas-desa my-2">
                                            <div class="luas-desa-wrapper grid grid-cols-2">
                                                <div class="title">
                                                    <h1 class="font-semibold text-blue-800 text-xl mb-1">Luas Wilayah</h1>
                                                </div>
                                                <div class="hasil">
                                                    <span class="text-gray-700 font-medium">&plusmn; 1,6
                                                        KM<sup>2</sup></span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="luas-desa mt-2">
                                            <div class="luas-desa-wrapper grid grid-cols-2">
                                                <div class="title">
                                                    <h1 class="font-semibold text-blue-800 text-xl mb-1">Jumlah Penduduk
                                                    </h1>
                                                </div>
                                                <div class="hasil">
                                                    <span class="text-gray-700 font-medium">3.203 Jiwa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jumlah-penduduk mb-10 md:mb-20">
                        <div class="jumlah-penduduk-wrapper">
                            <div class="title mb-10">
                                <h1 class="text-2xl md:text-4xl text-blue-800 font-bold mb-2">Jumlah Penduduk</h1>
                                <span class="text-sm md:text-base">Total Keseluruhan Penduduk dan Kepala Keluarga Desa Meka
                                    Sari</span>
                            </div>
                            <div class="card-wrapper grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                <div class="card">
                                    <div class="card-body flex flex-row items-center p-4 rounded-lg bg-gray-50 shadow-md">
                                        <div class="icon me-2">
                                            <div class="icon-wrapper p-4 bg-green-200 rounded-md">
                                                <i class="bi bi-people-fill text-3xl text-green-400"></i>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <h1 class="text-xl text-blue-800 font-bold mb-1">Total Penduduk</h1>
                                            <span class="text-gray-800 font-medium">3.024 Jiwa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body flex flex-row items-center p-4 rounded-lg bg-gray-50 shadow-md">
                                        <div class="icon me-2">
                                            <div class="icon-wrapper p-4 bg-yellow-100 rounded-md">
                                                <i class="bi bi-person-fill text-3xl text-yellow-400"></i>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <h1 class="text-xl text-blue-800 font-bold mb-1">Kepala Keluarga</h1>
                                            <span class="text-gray-800 font-medium">3.024 Jiwa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body flex flex-row items-center p-4 rounded-lg bg-gray-50 shadow-md">
                                        <div class="icon me-2">
                                            <div class="icon-wrapper p-4 bg-red-200 rounded-md">
                                                <i class="bi bi-gender-male text-3xl text-red-400"></i>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <h1 class="text-xl text-blue-800 font-bold mb-1">Perempuan</h1>
                                            <span class="text-gray-800 font-medium">427 Jiwa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body flex flex-row items-center p-4 rounded-lg bg-gray-50 shadow-md">
                                        <div class="icon me-2">
                                            <div class="icon-wrapper p-4 bg-blue-200 rounded-md">
                                                <i class="bi bi-gender-male text-3xl text-blue-400"></i>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <h1 class="text-xl text-blue-800 font-bold mb-1">Laki-Laki</h1>
                                            <span class="text-gray-800 font-medium">645 Jiwa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bagan">
                        <div class="title mb-10">
                            <h1 class="text-2xl md:text-4xl text-blue-800 font-bold mb-2">Struktur Pemerintahan Desa</h1>
                            <span class="text-sm md:text-base">Bagan Struktur Pemerintahan Desa Mekar Sari Kecamatan Deli
                                Tua</span>
                        </div>
                        <div class="image">
                            <div class="image-wrapper w-full rounded-lg shadow-lg border overflow-hidden">
                                <img src="https://cdn.digitaldesa.com/uploads/profil/32.07.09.2014/common/700900e60051012cfc476926f10b4a5a.jpg"
                                    alt="image-bagan" class="w-full ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
