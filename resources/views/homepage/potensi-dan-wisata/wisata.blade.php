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
                    <span class="text-sm leading-none">/ Wisata</span>
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

    <section class="section pt-3">
        <div class="container">
            <div class="row">
                @foreach ($data as $item)
                <div class="mb-8 md:col-6 lg:col-4">
                    <div class="card">
                        @if($item)
                        <img class="card-img" style="object-fit: cover;" src="{{ $item->tourImage->getUrl() }}" alt="{{ $item->tourImage->file_name }}" />
                        @else
                        <img class="card-img" width="235" height="304" src="{{asset('pinwheel/images/posts/post-3.png')}}" alt="" />
                        @endif
                        <div class="card-content">
                            <h3 class="h4 card-title">
                                <p>
                                    {{ $item['title'] }}
                                </p>
                            </h3>
                            <p>
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
