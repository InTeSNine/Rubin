<div>
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #4b5563;
            --background-color: #f3f4f6;
            --surface-color: #ffffff;
            --text-primary: #111827;
            --text-secondary: #6b7280;
            --border-color: #e5e7eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: var(--background-color);
            color: var(--text-primary);
            line-height: 1.5;
        } */

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        h1 {
            font-size: 1.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
        }

        .user-list {
            background-color: var(--surface-color);
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .user-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            transition: background-color 0.2s;
        }

        .user-item:hover {
            background-color: var(--background-color);
        }

        .user-item:last-child {
            border-bottom: none;
        }

        .user-avatar {
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            margin-right: 1rem;
            object-fit: cover;
        }

        .user-info {
            flex: 1;
        }

        .user-name {
            font-weight: 500;
        }

        .menu-button {
            padding: 0.5rem;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-secondary);
            font-size: 1.25rem;
        }

        .menu-template {
            position: absolute;
            background-color: var(--surface-color);
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            z-index: 50;
            min-width: 160px;
        }

        .menu-item {
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .menu-item:hover {
            background-color: var(--background-color);
        }

        .icon {
            font-size: 1.25rem;
        }

        @media (max-width: 640px) {
            .container {
                padding: 1rem;
            }

            .user-avatar {
                width: 2.5rem;
                height: 2.5rem;
            }
        }
    </style>

    <div class="container">
        <h1>Users</h1>
        <div class="user-list">
            <!-- Sample users will be populated by JavaScript -->
        </div>
    </div>

    <!-- User menu template -->
    <div class="menu-template" style="display: none;">
        <div class="menu-item" data-action="info">
            <i class="icon">ℹ️</i>
            Add Info
        </div>
        <div class="menu-item" data-action="chat">
            <i class="icon">💬</i>
            Chat
        </div>
        <div class="menu-item" data-action="report">
            <i class="icon">🚩</i>
            Report
        </div>
        <div class="menu-item" data-action="romail">
            <i class="icon">📧</i>
            RoMail
        </div>
    </div>

    <script>
        // Sample user data
        const users = [
            { id: 1, name: 'Alex Thompson', avatar: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400' },
            { id: 2, name: 'Sarah Chen', avatar: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400' },
            { id: 3, name: 'Marcus Johnson', avatar: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400' },
            { id: 4, name: 'Emma Wilson', avatar: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400' },
            { id: 5, name: 'David Kim', avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400' },
            { id: 6, name: 'Lisa Anderson', avatar: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400' },
            { id: 7, name: 'Michael Brown', avatar: 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400' },
            { id: 8, name: 'Rachel Garcia', avatar: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400' },
            { id: 9, name: 'James Lee', avatar: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400' },
            { id: 10, name: 'Sophie Taylor', avatar: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400' },
        ];

        // Create user list
        const userList = document.querySelector('.user-list');
        const menuTemplate = document.querySelector('.menu-template');
        let activeMenu = null;

        function createUserElement(user) {
            const userItem = document.createElement('div');
            userItem.className = 'user-item';
            userItem.innerHTML = `
                <img src="${user.avatar}" alt="${user.name}" class="user-avatar">
                <div class="user-info">
                    <div class="user-name">${user.name}</div>
                </div>
                <button class="menu-button">⋮</button>
            `;

            const menuButton = userItem.querySelector('.menu-button');
            menuButton.addEventListener('click', (e) => {
                e.stopPropagation();
                toggleMenu(user, menuButton);
            });

            return userItem;
        }

        function toggleMenu(user, button) {
            if (activeMenu) {
                activeMenu.remove();
                activeMenu = null;
            }

            const menu = menuTemplate.cloneNode(true);
            menu.style.display = 'block';
            menu.classList.add('active-menu');
            menu.style.position = 'absolute';

            const rect = button.getBoundingClientRect();
            menu.style.top = `${rect.bottom + window.scrollY}px`;
            menu.style.left = `${rect.left + window.scrollX}px`;

            document.body.appendChild(menu);
            activeMenu = menu;

            menu.querySelectorAll('.menu-item').forEach(item => {
                item.addEventListener('click', () => {
                    const action = item.dataset.action;
                    handleMenuAction(action, user);
                    menu.remove();
                    activeMenu = null;
                });
            });
        }

        function handleMenuAction(action, user) {
            switch (action) {
                case 'info':
                    alert(`Add info for ${user.name}`);
                    break;
                case 'chat':
                    window.location.href = `chat.html?user=${user.id}`;
                    break;
                case 'report':
                    window.location.href = `reports.html?user=${user.id}`;
                    break;
                case 'romail':
                    window.location.href = `romail.html?user=${user.id}`;
                    break;
            }
        }

        // Initialize user list
        users.forEach(user => {
            userList.appendChild(createUserElement(user));
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (activeMenu && !e.target.closest('.menu-button')) {
                activeMenu.remove();
                activeMenu = null;
            }
        });
    </script>
</div>