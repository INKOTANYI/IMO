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
        body {
            font-family: 'Arial', sans-serif;
            font-size: 1.1rem;
            background-color: #FFFFFF;
        }
        .main-header {
            background-color: #0052A5;
            color: #FFFFFF;
            border-bottom: 2px solid #FFC107;
        }
        .main-header .nav-link {
            color: #FFFFFF;
        }
        .main-header .nav-link:hover {
            color: #FFC107;
        }
        .main-sidebar {
            background-color: #0052A5;
        }
        .brand-link, .nav-link {
            color: #FFFFFF !important;
        }
        .nav-link:hover, .nav-link.active {
            background-color: #FFC107 !important;
            color: #0052A5 !important;
        }
        .content-wrapper {
            background-color: #FFFFFF;
        }
        .main-footer {
            background-color: #009A49;
            color: #FFFFFF;
            border-top: 2px solid #FFC107;
        }
        a:focus, button:focus {
            outline: 3px solid #FFC107;
            outline-offset: 2px;
        }
        [aria-current="page"] {
            background-color: #FFC107;
            color: #0052A5 !important;
        }
        .card-header {
            background-color: #0052A5;
            color: #FFFFFF;
        }
        .card {
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background-color: #0052A5;
            border-color: #0052A5;
        }
        .btn-primary:hover {
            background-color: #FFC107;
            border-color: #FFC107;
            color: #0052A5;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
    @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
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
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" aria-current="{{ request()->routeIs('admin.dashboard') ? 'page' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('photos.index') }}" class="nav-link {{ request()->routeIs('photos.index') ? 'active' : '' }}" aria-current="{{ request()->routeIs('photos.index') ? 'page' : '' }}">
                            <i class="nav-icon fas fa-image"></i>
                            <p>Manage Photos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Events</p>
                        </a>
                    </li>
                    <li class="nav-header">Social</li>
                    <li class="nav-item">
                        <a href="{{ route('admin.social.accounts.index') }}" class="nav-link {{ request()->routeIs('admin.social.accounts.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-plug"></i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.social.posts.create') }}" class="nav-link {{ request()->routeIs('admin.social.posts.create') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>Composer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.social.posts.index') }}" class="nav-link {{ request()->routeIs('admin.social.posts.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.social.media.index') }}" class="nav-link {{ request()->routeIs('admin.social.media.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-photo-video"></i>
                            <p>Media</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

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
