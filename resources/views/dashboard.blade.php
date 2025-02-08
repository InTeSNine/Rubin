<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ریست کردن استایل‌ها */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            direction: rtl;
            text-align: right;
        }

        /* هدر */
        .header {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: top 0.3s;
        }

        .header-top {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        /* لوگو */
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ef394e;
            text-decoration: none;
            white-space: nowrap;
        }

        /* جستجو */
        .search-section {
            flex-grow: 1;
            display: flex;
            gap: 1rem;
            position: relative;
        }

        .search-bar {
            flex-grow: 1;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 0.9rem;
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        /* فیلترهای جستجو */
        .search-filters {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 10px;
            border-radius: 8px;
            width: 300px;
        }

        .search-filters label {
            display: block;
            margin-top: 8px;
            font-size: 0.9rem;
        }

        .search-filters input,
        .search-filters select {
            width: 100%;
            padding: 6px;
            margin-top: 4px;
        }

        body.blur-effect {
            filter: blur(3px);
        }

        .search-bar:focus-within .search-filters {
            display: block;
        }

        /* نوار ناوبری */
        .nav-bar {
            border-top: 1px solid #eee;
            background: #fff;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        /* منوی مدیریت سیستم */
        .categories-dropdown {
            position: relative;
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

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            min-width: 200px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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

        /* لینک‌های کناری */
        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-size: 0.9rem;
        }

        /* هدر اسکرول */
        .header.hidden {
            top: -80px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-top">
            <a href="/" class="logo">Rubin</a>

            <div class="search-section">
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="جستجو در کاربران...">
                    <i class="fas fa-search search-icon"></i>

                    <!-- فیلترها -->
                    <div class="search-filters">
                        <label>نقش:</label>
                        <select>
                            <option>همه نقش‌ها</option>
                            <option>دانشجو</option>
                            <option>مدیر</option>
                            <option>مشاور</option>
                            <option>استاد</option>
                        </select>

                        <label>سن:</label>
                        <input type="number" placeholder="مثلاً 25">

                        <label>استعداد:</label>
                        <input type="text" placeholder="مثلاً پایتون، نوشتن">

                        <label>کلاس:</label>
                        <select>
                            <option>هوش مصنوعی</option>
                            <option>مارکتینگ</option>
                            <option>دیزاین</option>
                        </select>

                        <label>انتخاب کاربران:</label>
                        <input type="checkbox" id="all-users" checked>
                        <label for="all-users">همه کاربران</label>
                        <br>
                        <input type="checkbox"> کاربر ۱
                        <input type="checkbox"> کاربر ۲
                        <input type="checkbox"> کاربر ۳
                    </div>
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
                        <a href="#">داشبورد</a>
                        <a href="#">سیستم</a>
                        <a href="#">سورس‌ها</a>
                        <a href="#">RuMail</a>
                    </div>
                </div>

                <div class="nav-links">
                    <a href="#">گزارش</a>
                    <a href="#">افزودن فایل</a>
                    <a href="#">چت</a>
                    <a href="#">کاربران</a>
                    <a href="#">اخیر</a>
                </div>
            </div>
        </nav>
    </header>

    <script>
        let lastScrollTop = 0;
        const header = document.querySelector(".header");

        window.addEventListener("scroll", function () {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                header.classList.add("hidden");
            } else {
                header.classList.remove("hidden");
            }
            lastScrollTop = scrollTop;
        });
    </script>
</body>
</html>
