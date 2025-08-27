<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - IMO</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}" onerror="this.href='https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        :root {
            --primary-blue: #0052A5; /* NUDOR Blue */
            --accent-yellow: #FFC107; /* NUDOR Yellow */
            --secondary-green: #009A49; /* NUDOR Green */
            --background-white: #FFFFFF; /* NUDOR White */
        }
        body {
            font-family: 'Arial', sans-serif;
            font-size: 1.1rem;
            background-color: var(--background-white);
        }
        .main-header {
            background-color: var(--primary-blue);
            color: var(--background-white);
            border-bottom: 2px solid var(--accent-yellow);
        }
        .main-header .nav-link {
            color: var(--background-white);
        }
        .main-header .nav-link:hover {
            color: var(--accent-yellow);
        }
        .main-sidebar {
            background-color: var(--primary-blue);
        }
        .brand-link, .nav-link {
            color: var(--background-white) !important;
        }
        .nav-link:hover, .nav-link.active {
            background-color: var(--accent-yellow) !important;
            color: var(--primary-blue) !important;
        }
        .content-wrapper {
            background-color: var(--background-white);
        }
        .main-footer {
            background-color: var(--secondary-green);
            color: var(--background-white);
            border-top: 2px solid var(--accent-yellow);
        }
        a:focus, button:focus {
            outline: 3px solid var(--accent-yellow);
            outline-offset: 2px;
        }
        [aria-current="page"] {
            background-color: var(--accent-yellow);
            color: var(--primary-blue) !important;
        }
    </style>
    @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" role="navigation" aria-label="Main navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button" aria-label="Toggle sidebar">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button" aria-label="Logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" role="complementary" aria-label="Sidebar navigation">
        <a href="#" class="brand-link" aria-label="IMO Admin Home">
            <span class="brand-text font-weight-light">IMO Admin</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block" aria-label="User: {{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" aria-label="Sidebar menu">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="{{ request()->routeIs('dashboard') ? 'page' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        {{-- <a href="{{ route('admin.photos.index') }}" class="nav-link {{ request()->routeIs('admin.photos*') ? 'active' : '' }}" aria-current="{{ request()->routeIs('admin.photos*') ? 'page' : '' }}"> --}}
                            <i class="nav-icon fas fa-image"></i>
                            <p>Manage Photos</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper" role="main">
        <section class="content-header">
            <div class="container-fluid">
                <h1>@yield('title', 'Admin Dashboard')</h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Izere Mubyeyi Organization &copy; 2025</strong>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}" onerror="this.src='https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js'"></script>
@yield('scripts')
</body>
</html>