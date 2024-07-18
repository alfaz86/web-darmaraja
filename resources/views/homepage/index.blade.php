@extends('homepage.layouts.app')

@section('title', 'Website Kec Darmaraja')

@section('content')
<section class="section banner relative flex items-center justify-center" >
    <div class="container">
        <div class="row items-center">
            <div class="lg:col-6">
                <h1 class="banner-title">
                    Selamat Datang di Website Kami
                </h1>
                <p class="my-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum sapiente doloribus excepturi doloremque quis eum recusandae facilis explicabo, ducimus quaerat, aliquam, id impedit sit quasi aspernatur aut quia. Officia, a hic et ullam quae eum, optio libero sint maxime placeat magni, enim inventore quod voluptatem eaque deleniti exercitationem unde! Cupiditate.
                </p>
            </div>
            <div class="lg:col-6">
                <img class="w-full object-contain rounded-lg shadow-lg" src="images/homepage-background.jpeg" alt="" />
            </div>
        </div>
    </div>
    <img class="banner-shape absolute -top-28 right-0 -z-[1] w-full max-w-[30%]" src="pinwheel/images/banner-shape-2.svg" alt="" />
</section>
<!-- ./end Banner -->

<div style="margin-top: 100px"></div>

<!-- Services -->
<section class="section services">
    <div class="container">
        <div class="row gx-5 mt-12 items-center lg:mt-0">
            <div class="lg:col-4">
                <div class="relative">
                    <img class="w-full object-contain rounded-lg shadow-lg" src="images/camat.jpeg" />
                </div>
            </div>
            <div class="mt-6 lg:col-8 lg:mt-0">
                <div class="container">
                    <h2 class="lg:text-4xl">
                        Sambutan Camat Darmaraja
                    </h2>
                    <p class="mt-4">
                        Assalammualaikum Wr. Wb.
                    </p>
                    <p class="mt-4">
                        Segala puja dan puji hanyalah milik Allah SWT dengan ucapan Bismillahirohmannirrohim, kami Pemerintah Kecamatan Darmaraja akan selalu berusaha memberikan pelayanan prima kepada masyarakat se-Kecamatan Darmaraja. Tentunya pelayanan yang menjadi kewenangan pemerintah kecamatan sesuai dengan relasi yang ada. Pelayanan yang cepat, tepat, dam banyak manfaat , keterbukaan informasi publik, akuntabilitas administrasi serta keramahan seluruh para perangkat kecamatan Darmaraja menjadi bagian yang tidak terpisahkan. untuk peningkatan pelayanan yang lebih baik, melalui situs resmi Pemerintahan Kecamatan Darmaraja ini, akan bermanfaat bagi semua masyarakat se-masyarakat Darmaraja.
                    </p>
                    <p class="mt-4">
                        Wassalammualaikum Wr. Wb.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="margin-top: 100px"></div>

<!-- Key features -->
<section class="section key-feature relative">
    <img class="absolute left-0 top-0 -z-[1] -translate-y-1/2" src="pinwheel/images/icons/feature-shape-2.svg" alt="" />
    <div class="container">
        <div class="row justify-between text-center lg:text-start">
            <div class="lg:col-5">
                <h2>Produk Layanan Terbaru</h2>
            </div>
            <div class="mt-6 lg:col-5 lg:mt-0">
                <p>
                    Produk layanan merupakan Produk apa saja atau Layanan apa saja yang dapat diberikan Kepada Masyarakat, Produk Layanan ini memberikan informasi kepada Masyarakat terkait Persyaratan dan alur dari Layanan.
                </p>
            </div>
        </div>
        <div class="key-feature-grid mt-10 grid grid-cols-1 gap-7 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
            <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg">
                <div>
                    <h3 class="h4 text-xl lg:text-2xl">Produk Kantor Layanan Kami!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <span class="icon mt-4">
                    <img class="objec-contain" src="pinwheel/images/icons/feature-icon-1.svg" alt="" />
                </span>
            </div>
            <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg">
                <div>
                    <h3 class="h4 text-xl lg:text-2xl">Pengaduan Publik</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <span class="icon mt-4">
                    <img class="objec-contain" src="pinwheel/images/icons/feature-icon-2.svg" alt="" />
                </span>
            </div>
            <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg">
                <div>
                    <h3 class="h4 text-xl lg:text-2xl">Komoditas Unggulan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <span class="icon mt-4">
                    <img class="objec-contain" src="pinwheel/images/icons/feature-icon-3.svg" alt="" />
                </span>
            </div>
            <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg">
                <div>
                    <h3 class="h4 text-xl lg:text-2xl">Wisata</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <span class="icon mt-4">
                    <img class="objec-contain" src="pinwheel/images/icons/feature-icon-4.svg" alt="" />
                </span>
            </div>
            <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg">
                <div>
                    <h3 class="h4 text-xl lg:text-2xl">Agenda</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <span class="icon mt-4">
                    <img class="objec-contain" src="pinwheel/images/icons/feature-icon-4.svg" alt="" />
                </span>
            </div>
        </div>
    </div>
</section>
<!-- ./end Key features -->

<div style="margin-top: 100px"></div>

<!-- Call To action -->
<section class="section features pb-0">
    <div class="container">
        <div class="row">
            <div class="mx-auto text-center lg:col-7">
                <h2>
                    Lokasi kantor Kecamatan Darmaraja
                </h2>
                <p class="mt-4">
                    Jalan Suramanggala No.04 45372, Darmajaya, Darmaraja, Kabupaten Sumedang, Jawa Barat 45372, Indonesia
                </p>
            </div>
        </div>
        <div class="mt-14 bg-white shadow-lg">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d934.6155245476803!2d108.07483332930113!3d-6.918983106101524!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f339a969e2213%3A0x7cca7d97a2fc944f!2sKantor%20Kecamatan%20Darmaraja!5e0!3m2!1sid!2sus!4v1720351275328!5m2!1sid!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<div style="margin-top: 100px"></div>
@endsection
