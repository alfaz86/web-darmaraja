<head>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/insun-medal.png')}}" />
    <!-- theme meta -->
    <meta name="theme-name" content="Pinwheel" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#fff" />
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#000" />
    <meta name="generator" content="gulp" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

    <!-- title -->
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- noindex robots -->
    <meta name="robots" content="" />

    <!-- meta-description -->
    <meta name="description" content="meta description" />

    <!-- author from config.json -->
    <meta name="author" content="{config.metadata.meta_author}" />

    <!-- og-title -->
    <meta property="og:title" content="" />

    <!-- og-description -->
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />

    <!-- twitter-title -->
    <meta name="twitter:title" content="" />

    <!-- twitter-description -->
    <meta name="twitter:description" content="" />

    <!-- og-image -->
    <meta property="og:image" content="" />

    <!-- twitter-image -->
    <meta name="twitter:image" content="" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- google font css -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&display=swap" rel="stylesheet" />

    <!-- styles -->
    <style>
        @media (min-width: 768px) {
            .md\:mt-40 {
                margin-top: 4rem;
            }
        }

        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            padding: 8px 12px;
            border: 1px solid #ddd;
            color: #1C85AE;
            text-decoration: none;
            border-radius: 4px;
        }

        .pagination a:hover {
            background-color: #f1f1f1;
        }

        .pagination .active span {
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #1C85AE;
            color: white;
            border: 1px solid #1C85AE;
        }

    </style>

    <!-- Swiper slider -->
    <link rel="stylesheet" href="{{asset('pinwheel/plugins/swiper/swiper-bundle.css')}}" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('pinwheel/plugins/font-awesome/v6/brands.css')}}" />
    <link rel="stylesheet" href="{{asset('pinwheel/plugins/font-awesome/v6/solid.css')}}" />
    <link rel="stylesheet" href="{{asset('pinwheel/plugins/font-awesome/v6/fontawesome.css')}}" />

    <!-- Main Stylesheet -->
    <link href="{{asset('pinwheel/styles/main.css')}}" rel="stylesheet" />

    @yield('styles')
</head>
