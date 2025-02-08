<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rubin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- لینک برای فونت آیکون Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazir', Arial, sans-serif;
        }

        body {
            direction: rtl;
            text-align: right;
            overflow-x: hidden;
        }

        .header {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .header-top {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .logo {
            font-size: 3rem;
            font-weight: bold;
            color: #426eff;
            text-decoration: none;
            white-space: nowrap;
        }

        .search-section {
            flex-grow: 1;
            display: flex;
            position: relative;
        }

        .search-section {
            flex-grow: 1;
            display: flex;
            position: relative;
        }

        .search-bar {
            flex-grow: 1;
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-icon {
            position: absolute;
            right: 10px;
            font-size: 1rem;
            color: #666;
            background: none;
            border: none;
            cursor: pointer;
        }

        .search-input {
            flex-grow: 1;
            padding: 0.75rem 2.5rem 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 0.9rem;
            background-color: #f4f4f4;
            color: #666;
        }


        .bg-neutral-100 {
            background-color: #f4f4f4;
        }

        .text-body-2 {
            font-size: 14px;
            color: #666;
        }

        .grow {
            flex-grow: 1;
        }

        .text-neutral-500 {
            color: #666;
        }


        .nav-bar {
            border-top: none;
            background: #fff;
            position: fixed;
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #ddd;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2px;
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .categories-dropdown {
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-left: 2px solid #ddd;
            padding-left: 1rem;
        }

        .dropdown-btn {
            padding: 0.5rem 1rem;
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .dropdown-btn i {
            font-size: 1.2rem;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            min-width: 200px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }

        .categories-dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 0.75rem 1rem;
            color: #333;
            text-decoration: none;
        }

        .dropdown-content a:hover {
            background: #f7f7f7;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-size: 0.9rem;
        }

        main {
            padding-top: 100px;
        }

        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
            }

            .categories-dropdown {
                width: 100%;
                border-left: none;
                padding-left: 0;
            }

            .dropdown-content {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-top">
            <a href="/" class="logo">Rubin</a>

            <div class="search-section">
                <div class="search-bar">
                    <button class="search-icon">
                        <i class="fas fa-search"></i>
                    </button>
                    <input type="text" class="search-input" placeholder="جستجو در کاربران..." />
                </div>
            </div>
        </div>

        <nav class="nav-bar">
            <div class="nav-container">
                <div class="categories-dropdown">
                    <button class="dropdown-btn">
                        <i class="fas fa-bars"></i> مدیریت سیستم
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('dashboard') }}">داشبورد</a>
                        <a href="#">سیستم</a>
                        <a href="#">سورس‌ها</a>
                        <a href="#">RuMail</a>
                    </div>
                </div>

                <div class="nav-links">
                    <a href="#">گزارش</a>
                    <a href="{{ route('addFile') }}">افزودن فایل</a>
                    <a href="{{ route('chat') }}">چت</a>
                    <a href="{{ route('users') }}">کاربران</a>
                    <a href="#">اخیر</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

</body>

</html>