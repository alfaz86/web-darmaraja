@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => 'Welcome ' . backpack_user()->name,
        'content'     => 'Selamat datang di panel admin. Di sini Anda dapat mengelola semua aspek dari aplikasi.',
    ];
@endphp
