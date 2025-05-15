<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard – Shirtify</title>
    @stack('style')
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background-color: #f5f7fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #dee2e6;
        }

        .sidebar a {
            color: #495057;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #f1f3f5;
            border-left: 3px solid #0d6efd;
        }

        .sidebar .active {
            background-color: #e9f2ff;
            border-left: 3px solid #0d6efd;
        }

        .card {
            border: none;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
        }

        .card-icon {
            font-size: 28px;
            color: #0d6efd;
        }

        .content {
            padding: 30px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .topbar {
            background-color: #ffffff;
            padding: 15px 30px;
            border-bottom: 1px solid #dee2e6;
            font-size: 18px;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row g-0">

            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <div class="text-center py-4 fs-4 border-bottom">
                    <a href="/" class="text-decoration-none">
                        🌇 <strong>UrbanNest</strong>
                    </a>
                </div>

                <a href="{{route('dashboard.index')}}" class="{{ request()->is('admin/main') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>

                <a href="/admin/rooms" class="{{ request()->is('admin/products') ? 'active' : '' }}">
                    <i class="bi bi-door-open"></i> Rooms
                </a>

                <a href="/admin/category" class="{{ request()->is('admin/category') ? 'active' : '' }}">
                    <i class="bi bi-calendar-check"></i> Bookings
                </a>

                <a href="/admin/orders" class="{{ request()->is('admin/orders') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Customers
                </a>
                <a href="/admin/orders" class="{{ request()->is('admin/orders') ? 'active' : '' }}">
                    <i class="bi bi-bar-chart-line"></i> Reports
                </a>



                <a href="#"><i class="ri-user-line me-2"></i> Users</a>
                <form method="POST" action="{{route('logout')}}">
                    @csrf

                    <button class="nav-link text-danger ms-4"> <i class="ri-logout-box-r-line"></i> Logout</button>
                </form>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 content">
                <div class="topbar">Admin Dashboard</div>

                @yield('main')

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.sidebar a');

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Remove 'active' class from all links
                    links.forEach(l => l.classList.remove('active'));

                    // Add 'active' class to the clicked link
                    this.classList.add('active');
                });
            });
        });
    </script>

    @stack('script')
</body>

</html>