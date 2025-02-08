
<!DOCTYPE html>

<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://unpkg.com/lucide@latest"></script>

    <title>روبین - پنل مدیریت</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 

<body style="margin: 0; padding: 0; font-family: system-ui, -apple-system, sans-serif;">
    <div style="display: flex; min-height: 100vh; background-color: #f3f4f6;">
        <!-- Main Content Area -->
        <main id="main-content" style="flex: 1; padding: 2rem; margin-right: 280px; transition: margin-right 0.3s ease-in-out;">
            {{ $slot }}
        </main>

        <!-- Sidebar -->
        <aside id="sidebar"
            style="position: fixed; right: 0; top: 0; height: 100vh; background-color: white; box-shadow: -4px 0 6px -1px rgba(0, 0, 0, 0.1); transition: width 0.3s ease-in-out; width: 280px; display: flex; flex-direction: column;">
            <!-- Toggle Button -->
            <button id="toggleButton"
                style="position: absolute; left: -12px; top: 2rem; background-color: white; border: none; border-radius: 50%; width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); cursor: pointer; display: flex; align-items: center; justify-content: center;">
                <i data-lucide="chevron-right" style="width: 16px; height: 16px;"></i>
            </button>

            <!-- Navigation -->
            <nav style="padding: 1rem;">
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <button class="nav-item active"
                        style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; border: none; border-radius: 0.5rem; background-color: #eef2ff; color: #4f46e5; font-weight: 500; cursor: pointer; width: 100%; text-align: right;">
                        <i data-lucide="bar-chart-2" style="width: 20px; height: 20px;"></i>
                        <span class="nav-text">گزارش</span>
                    </button>
                    <button class="nav-item"
                        style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; border: none; border-radius: 0.5rem; background-color: transparent; color: #6b7280; font-weight: 500; cursor: pointer; width: 100%; text-align: right;">
                        <i data-lucide="message-square" style="width: 20px; height: 20px;"></i>
                        <span class="nav-text">چت</span>
                    </button>
                    <button class="nav-item"
                        style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; border: none; border-radius: 0.5rem; background-color: transparent; color: #6b7280; font-weight: 500; cursor: pointer; width: 100%; text-align: right;">
                        <i data-lucide="mail" style="width: 20px; height: 20px;"></i>
                        <span class="nav-text">Rumail</span>
                    </button>
                    <button class="nav-item"
                        style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem; border: none; border-radius: 0.5rem; background-color: transparent; color: #6b7280; font-weight: 500; cursor: pointer; width: 100%; text-align: right;">
                        <i data-lucide="users" style="width: 20px; height: 20px;"></i>
                        <span class="nav-text">کاربران</span>
                    </button>
                </div>
            </nav>

            <!-- Search Section -->
            <div style="padding: 1rem; border-top: 1px solid #e5e7eb;">
                <div style="position: relative;">
                    <input type="text" placeholder="جستجو..."
                        style="width: 100%; padding: 0.5rem 2.5rem 0.5rem 1rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; background-color: #f9fafb; font-family: inherit;">
                    <i data-lucide="search"
                        style="position: absolute; right: 0.75rem; top: 50%; transform: translateY(-50%); width: 16px; height: 16px; color: #9ca3af;"></i>
                </div>
                <button
                    style="display: flex; align-items: center; gap: 0.5rem; margin-top: 0.5rem; padding: 0.5rem; border: none; background: none; color: #6b7280; font-size: 0.875rem; cursor: pointer;">
                    <i data-lucide="filter" style="width: 16px; height: 16px;"></i>
                    <span>فیلترها</span>
                </button>
            </div>

            <!-- Users List -->
            <div style="flex: 1; overflow-y: auto; padding: 1rem; border-top: 1px solid #e5e7eb;">
                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <!-- User 1 -->
                    <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.5rem; border-radius: 0.5rem; cursor: pointer; transition: background-color 0.2s;"
                        onmouseover="this.style.backgroundColor='#f9fafb'"
                        onmouseout="this.style.backgroundColor='transparent'">
                        <div style="position: relative;">
                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=100&h=100&fit=crop"
                                alt="علی محمدی"
                                style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                            <span
                                style="position: absolute; bottom: 0; right: 0; width: 12px; height: 12px; background-color: #10b981; border: 2px solid white; border-radius: 50%;"></span>
                        </div>
                        <div>
                            <div style="font-weight: 500; color: #1f2937;">علی محمدی</div>
                            <div style="font-size: 0.875rem; color: #6b7280;">آنلاین</div>
                        </div>
                    </div>

                    <!-- User 2 -->
                    <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.5rem; border-radius: 0.5rem; cursor: pointer; transition: background-color 0.2s;"
                        onmouseover="this.style.backgroundColor='#f9fafb'"
                        onmouseout="this.style.backgroundColor='transparent'">
                        <div style="position: relative;">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop"
                                alt="سارا احمدی"
                                style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                            <span
                                style="position: absolute; bottom: 0; right: 0; width: 12px; height: 12px; background-color: #9ca3af; border: 2px solid white; border-radius: 50%;"></span>
                        </div>
                        <div>
                            <div style="font-weight: 500; color: #1f2937;">سارا احمدی</div>
                            <div style="font-size: 0.875rem; color: #6b7280;">آفلاین</div>
                        </div>
                    </div>

                    <!-- User 3 -->
                    <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.5rem; border-radius: 0.5rem; cursor: pointer; transition: background-color 0.2s;"
                        onmouseover="this.style.backgroundColor='#f9fafb'"
                        onmouseout="this.style.backgroundColor='transparent'">
                        <div style="position: relative;">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=100&h=100&fit=crop"
                                alt="محمد رضایی"
                                style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                            <span
                                style="position: absolute; bottom: 0; right: 0; width: 12px; height: 12px; background-color: #fbbf24; border: 2px solid white; border-radius: 50%;"></span>
                        </div>
                        <div>
                            <div style="font-weight: 500; color: #1f2937;">محمد رضایی</div>
                            <div style="font-size: 0.875rem; color: #6b7280;">مشغول</div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Sidebar toggle functionality
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('toggleButton');
        const navTexts = document.querySelectorAll('.nav-text');
        let isExpanded = true;

        toggleButton.addEventListener('click', () => {
            isExpanded = !isExpanded;
            sidebar.style.width = isExpanded ? '280px' : '80px';
            toggleButton.innerHTML = `<i data-lucide="${isExpanded ? 'chevron-right' : 'chevron-left'}"></i>`;
            navTexts.forEach(text => text.style.display = isExpanded ? 'block' : 'none');
            lucide.createIcons();
        });

        // Navigation item click handler
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', () => {
                document.querySelectorAll('.nav-item').forEach(nav => {
                    nav.style.backgroundColor = 'transparent';
                    nav.style.color = '#6b7280';
                });
                item.style.backgroundColor = '#eef2ff';
                item.style.color = '#4f46e5';
            });
        });

        // Mobile responsiveness
        function checkMobileView() {
            if (window.innerWidth <= 768) {
                sidebar.style.transform = 'translateX(100%)';
                sidebar.style.transition = 'transform 0.3s ease-in-out';
            } else {
                sidebar.style.transform = 'translateX(0)';
            }
        }

        window.addEventListener('resize', checkMobileView);
        checkMobileView();
    </script>
</body>

</html>