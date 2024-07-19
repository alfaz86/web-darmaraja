@extends('homepage.layouts.app')

@section('title', 'Komoditas Unggulan')

@section('styles')
    <style>
        th, td {
            padding: 0.5rem;
        }
    </style>
@endsection

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
                    <span class="text-sm leading-none">/ Komoditas Unggulan</span>
                </li>
            </ul>
        </div>
        <div class="page-hero-content mx-auto max-w-[768px] text-center">
            <h1 class="mb-5 mt-8">
                Komoditas Unggulan
            </h1>
        </div>
        <div class="card">
            <table class="w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th rowspan="2" class="border border-gray-200">No</th>
                        <th rowspan="2" class="border border-gray-200">Lokasi</th>
                        <th colspan="3" class="border border-gray-200">Komoditas Unggulan</th>
                    </tr>
                    <tr>
                        <th class="border border-gray-200">Pemilik</th>
                        <th class="border border-gray-200">Kerajinan</th>
                        <th class="border border-gray-200">Olah Pangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $location => $items)
                        @foreach ($items as $index => $item)
                            <tr>
                                @if ($index === 0)
                                    <td rowspan="{{ count($items) }}" class="text-center border border-gray-200">{{ $loop->parent->iteration }}</td>
                                    <td rowspan="{{ count($items) }}" class="text-center border border-gray-200">{{ $location }}</td>
                                @endif
                                <td class="text-center border border-gray-200">{{ $item->owner }}</td>
                                <td class="text-center border border-gray-200">{{ $item->craft }}</td>
                                <td class="text-center border border-gray-200">{{ $item->food_processing }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4 flex justify-center">
                {{ $data->links() }}
            </div>
        </div>
        <div style="margin-top: 100px"></div>
    </div>
@endsection
