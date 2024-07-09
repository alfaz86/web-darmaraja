@extends('homepage.layouts.app')

@section('title', 'Luas Wilayah')

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
                <span class="text-sm leading-none">/ Luas Wilayah</span>
            </li>
        </ul>
        <div class="row">
            <div class="lg:col-6 lg:order-2">
                <img class="w-full mx-auto md:mt-40 rounded-lg shadow-lg" src="{{asset('images/luas-wilayah.png')}}" width="412" height="483" alt="" />
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
                        <span class="text-sm leading-none">/ Luas Wilayah</span>
                    </li>
                </ul>
                <h1 class="text-left">
                    Luas Wilayah
                </h1>
                <div class="content text-justify-content">
                    <p class="mt-6">
                        Kecamatan Darmaraja merupakan merupakan salah satu dari 26 kecamatan diwilayah Kabupaten Sumedang yang terletak sebelah timur ibu kota Kabupaten, dan merupakan pula salah satu kecamatan yang yang sebagian wilayahnya terkena Pembangunan Waduk Jatigede, dari 16 (enam belas) , 10 (sepuluh) yang terkena Pembangunan Waduk Jatigede, dan dari 10 (sepuluh) yang terkena pembangunan Jatigede, 4 (empat) yang dihapus berdasarkan Peraturan Daerah Kabupaten Sumedang Nomor 11 tahun 2015 tentang Penghapusan dan Penggabungan yang terkena Dampak Pembangunan Waduk Jatigede. Adapun sekarang meliputi 12 (dua belas) yaitu Darmaraja, Darmajaya, Sukaratu, Neglasari, Ranggon, Sukamenak, Cipeuteuy, Cieunteung, Tarunajaya, Cikeusi, Karangpakuan, Pakualam. Dengan Luas Wilayah 3068,971 ha.
                    </p>
                    <p class="mt-6">
                        Luas wilayah sebelum penggenangan adalah seluas 4722,951 Ha, yang terkena Pembangunan Waduk Jatigede seluas ± 1653,98 Ha, dan sekarang setelah penggenangan Waduk Jatigede luas wilayah seluas ± 3068,971Ha, walaupun penetapan luas wilayah belum ada penetapan secara ordinat dari Pemerintah setelah penggenangan.
                    </p>
                    <p class="mt-6">
                        Selain yang dihapus terdapat pula yang digabungkan yaitu :
                    </p>
                    <ol>
                        <li>Sisa dari Cibogo digabungkan dengan Tarunajaya</li>
                        <li>Sisa dari Jatibungur sebagian digabungkan dengan Sukaratu dan sebagian lagi ke Darmajaya.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
