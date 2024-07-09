@extends('homepage.layouts.app')

@section('title', 'Wisata')

@section('content')
<section class="page-hero pt-16 pb-14">
    <div class="container">
        <div class="text-center">
            <ul class="breadcrumb inline-flex h-8 items-center justify-center space-x-2 rounded-3xl bg-theme-light px-4 py-2">
                <li class="leading-none text-dark">
                    <a class="inline-flex items-center text-primary" href="/">
                        <svg class="mr-1.5" width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.1769 15.0588H10.3533V9.41178H5.64744V15.0588H2.82391V6.58825H1.88274V16H14.118V6.58825H13.1769V15.0588ZM6.58862 15.0588V10.353H9.41215V15.0588H6.58862ZM15.8084 6.09225L15.2512 6.85178L8.00038 1.52472L0.749559 6.8499L0.192383 6.09131L8.00038 0.357666L15.8084 6.09225Z" fill="black" />
                        </svg>
                        <span class="text-sm leading-none">Beranda</span>
                    </a>
                </li>
                <li class="leading-none text-dark">
                    <span class="text-sm leading-none">/ Blog</span>
                </li>
            </ul>
        </div>
        <div class="page-hero-content mx-auto max-w-[768px] text-center">
            <h1 class="mb-5 mt-8">
                Wisata
            </h1>
            <p>Potensi wisata di Kecamatan Darmaraja terdapat dibeberapa lokasi , dengan berbagai jenis potensi wisata yang ada, dengan adanya Wisata di Kecamatan Darmaraja, Pemerintah Kecamatan Darmaraja dan Pemerintah berharap, agar adanya tambahan sumber pendapatan, adanya lapangan kerja, adanya peningkatan sumber ekonomi, adanya peningkatan ketrampilan sdm warga.</p>
        </div>
    </div>

    <div style="margin-top: 100px"></div>

    <section class="section pt-0">
        <div class="container">
            <div class="category-filter mb-10 mt-3 rounded-xl bg-[#EEEEEE] px-4">
                <ul class="filter-list">
                    <li>
                        <a class="filter-btn filter-btn-active btn btn-sm" href="#">All Categories</a>
                    </li>
                    <li>
                        <a class="filter-btn btn btn-sm" href="#">Development</a>
                    </li>
                    <li>
                        <a class="filter-btn btn btn-sm" href="#">Updates</a>
                    </li>
                    <li>
                        <a class="filter-btn btn btn-sm" href="#">Email Marketing</a>
                    </li>
                    <li>
                        <a class="filter-btn btn btn-sm" href="#">Rate Optimization</a>
                    </li>
                </ul>
            </div>
            <div class="featured-posts row">
                <div class="mb-8 md:col-6">
                    <div class="card">
                        <img class="card-img" width="235" height="304" src="{{asset('images/kampung-buricak-burinong-pakualam.png')}}" alt="" />
                        <div class="card-content">
                            <div class="card-tags">
                                <a class="tag" href="#">Development</a>
                            </div>
                            <h3 class="h4 card-title">
                                <a href="#">Kampung Buricak Burinong Pakualam</a>
                            </h3>
                            <p>
                                Mauris blandit aliquet elit, eget tincidunt nibh dolor sit amet,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mb-8 md:col-6">
                    <div class="card">
                        <img class="card-img" width="235" height="304" src="{{asset('images/wisata-alam-pasir-cinta.png')}}" alt="" />
                        <div class="card-content">
                            <div class="card-tags">
                                <a class="tag" href="#">Development</a>
                            </div>
                            <h3 class="h4 card-title">
                                <a href="#">Wisata Alam Pasir Cinta</a>
                            </h3>
                            <p>
                                Mauris blandit aliquet elit, eget tincidunt nibh dolor sit amet,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mb-8 md:col-6">
                    <div class="card">
                        <img class="card-img" width="235" height="304" src="{{asset('images/wisata-pemancingan-pasir-tugaran-karangpakuan.jpg')}}" alt="" />
                        <div class="card-content">
                            <div class="card-tags">
                                <a class="tag" href="#">Development</a>
                            </div>
                            <h3 class="h4 card-title">
                                <a href="#">Wisata Pemancingan
                                    Pasir Tugaran
                                    Karangpakuan
                                </a>
                            </h3>
                            <p>
                                Mauris blandit aliquet elit, eget tincidunt nibh dolor sit amet,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
