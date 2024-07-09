@extends('homepage.layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')
<section class="section">
    <div class="container">
        <ul class="breadcrumb mb-8 inline-flex h-8 items-center justify-center space-x-2 rounded-3xl bg-theme-light px-4 py-2 lg:hidden">
            <li class="leading-none text-dark">
                <a class="inline-flex items-center text-primary" href="/">
                    <svg class="mr-1.5" width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.1769 15.0588H10.3533V9.41178H5.64744V15.0588H2.82391V6.58825H1.88274V16H14.118V6.58825H13.1769V15.0588ZM6.58862 15.0588V10.353H9.41215V15.0588H6.58862ZM15.8084 6.09225L15.2512 6.85178L8.00038 1.52472L0.749559 6.8499L0.192383 6.09131L8.00038 0.357666L15.8084 6.09225Z" fill="black" />
                    </svg>
                    <span class="text-sm leading-none">Beranda</span>
                </a>
            </li>
            <li class="leading-none text-dark">
                <span class="text-sm leading-none">/ Profil Kecamatan</span>
            </li>
            <li class="leading-none text-dark">
                <span class="text-sm leading-none">/ Struktur Organisasi</span>
            </li>
        </ul>
        <div class="row">
            <div class="lg:col-6 lg:order-2">
                <img class="w-full mx-auto md:mt-40 shadow-lg" src="{{asset('images/struktur-organisasi.png')}}" width="412" height="483" alt="" />
            </div>
            <div class="mt-10 lg:col-6 lg:order-1 lg:mt-0">
                <ul class="breadcrumb mb-8 hidden h-8 items-center justify-center space-x-2 rounded-3xl bg-theme-light px-4 py-2 lg:inline-flex">
                    <li class="leading-none text-dark">
                        <a class="inline-flex items-center text-primary" href="/">
                            <svg class="mr-1.5" width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1769 15.0588H10.3533V9.41178H5.64744V15.0588H2.82391V6.58825H1.88274V16H14.118V6.58825H13.1769V15.0588ZM6.58862 15.0588V10.353H9.41215V15.0588H6.58862ZM15.8084 6.09225L15.2512 6.85178L8.00038 1.52472L0.749559 6.8499L0.192383 6.09131L8.00038 0.357666L15.8084 6.09225Z" fill="black" />
                            </svg>
                            <span class="text-sm leading-none">Beranda</span>
                        </a>
                    </li>
                    <li class="leading-none text-dark">
                        <span class="text-sm leading-none">/ Profil Kecamatan</span>
                    </li>
                    <li class="leading-none text-dark">
                        <span class="text-sm leading-none">/ Struktur Organisasi</span>
                    </li>
                </ul>
                <h1 class="text-left">
                    Struktur Organisasi
                </h1>
                <div class="content text-justify-content">
                    <p class="mt-6">
                        Sesuai dengan Peraturan Daerah Kabupaten Sumedang Nomor 9 Tahun 2014 tentang Pembentukan Organisasi Perangkat Daerah Kabupaten Sumedang. Susunan Organisasi Perangkat Daerah meliputi:
                    </p>
                    <ol class="mt-6">
                        <li>Camat</li>
                        <li>Sekretaris Camat</li>
                        <li>Seksi Pelayanan Publik</li>
                        <li>Seksi Pemerintahan Desa</li>
                        <li>Seksi Pemberdayaan Masyarakat</li>
                        <li>Seksi Pemerintahan Umum</li>
                        <li>Seksi Ketertiban Umum dan Ketentraman Masyarakat</li>
                        <li>Sub. Bagian Program dan Keuangan</li>
                        <li>Sub. Bagian Umum</li>
                    </ol>
                    <p class="mt-6">
                        Jumlah personil di berjumlah 47 (empat puluh tujuh) orang yang terdiri dari 22 (dua puluh dua orang PNS dan 25 (dua puluh lima) orang tenaga sukwan
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
