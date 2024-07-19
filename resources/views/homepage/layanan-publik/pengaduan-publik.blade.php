@extends('homepage.layouts.app')

@section('title', 'Pengaduan Publik')

@section('styles')
<style>
    .overlay {
        position: absolute;
        bottom: 0;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5);
        /* Black see-through */
        color: #f1f1f1;
        width: 100%;
        transition: .5s ease;
        opacity: 0;
        color: white;
        font-size: 20px;
        padding: 20px;
        text-align: center;
    }

    .contact-img:hover .overlay  {
        opacity: 1;
    }

    .contact-img .overlay:hover  {
        cursor: pointer;
        text-decoration: underline;
        color: #f1f1f1;
    }

</style>
@endsection

@section('content')
<section class="page-hero pt-16 pb-14">
    <div class="container">
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    alert("{{ session('success') }}");
                });
            </script>
        @endif
        
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
                    <span class="text-sm leading-none">/ Pengaduan Publik</span>
                </li>
            </ul>
        </div>
        <div class="page-hero-content mx-auto max-w-[768px] text-center">
            <h1 class="mb-5 mt-8">
                Pengaduan Publik
            </h1>
        </div>

        <div style="margin-top: 100px"></div>

        <section class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="md:col-6 md:order-1 mb-10">
                        <form class="lg:max-w-[484px]" action="{{ route('layanan-publik.pengaduan-publik') }}" method="POST">
                            @csrf
                            <div class="form-group mb-5">
                                <label class="form-label" for="name">Nama</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Anda" required/>
                            </div>
                            <div class="form-group mb-5">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="text" id="email" name="email" placeholder="Email Anda" required/>
                            </div>
                            <div class="form-group mb-5">
                                <label class="form-label" for="phone">No Telp</label>
                                <input class="form-control" type="text" id="phone" name="phone" placeholder="No Telp Anda" required/>
                            </div>
                            <div class="form-group mb-5">
                                <label class="form-label" for="message">Pesan</label>
                                <textarea class="form-control h-[150px]" id="message" name="message" cols="30" rows="10" required></textarea>
                            </div>
                            <input class="btn btn-primary block w-full" type="submit" value="Kirim" />
                        </form>
                    </div>
                    <div class="mb-10 text-center md:col-6 md:order-2 md:mb-0 md:pt-9">
                        <h4 class="mb-3">Atau Lapor ke lapor.go.id</h4>
                        <div class="contact-img relative inline-flex">
                            <img class="rounded-lg shadow-lg" src="{{ asset('images/lapor-go-id.png') }}" alt=""/>
                            <div class="overlay rounded-b-lg" onclick="window.open('https://www.lapor.go.id/', '_blank')" >lapor.go.id</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div style="margin-top: 100px"></div>
    </div>
    @endsection
