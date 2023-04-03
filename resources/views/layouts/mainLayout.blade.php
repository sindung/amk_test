<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | @yield('title')</title>

    <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico">

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap"
                    width="30" height="24" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : null }}" aria-current="page"
                            href="/"><i class="bi bi-house"></i>
                            Home</a>
                    </li>
                    @if (Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link {{ in_array(Request::segment(1), ['customers', 'customers-add', 'customers-edit', 'customers-delete', 'customers-deleted']) ? 'active' : null }}"
                                href="/customers"><i class="bi bi-people"></i> Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ in_array(Request::segment(1), ['item', 'item-add', 'item-edit', 'item-delete', 'item-deleted']) ? 'active' : null }}"
                                href="/item"><i class="bi bi-box2"></i> Items</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{ in_array(Request::segment(1), ['orders', 'orders-add', 'orders-edit', 'orders-delete', 'orders-deleted']) ? 'active' : null }}"
                            href="/orders"><i class="bi bi-cart"></i> Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ in_array(Request::segment(1), ['order-item', 'order-item-add', 'order-item-edit', 'order-item-delete', 'order-item-deleted']) ? 'active' : null }}"
                            href="/order-item"><i class="bi bi-card-list"></i> Order Items</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ in_array(Request::segment(1), ['students', 'student', 'students-add', 'student-edit', 'student-delete']) ? 'active' : null }}"
                            href="/students"><i class="bi bi-people"></i> Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ in_array(Request::segment(1), ['class', 'class-add', 'class-edit', 'class-delete']) ? 'active' : null }}"
                            href="/class"><i class="bi bi-building"></i> Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ in_array(Request::segment(1), ['extracurricular', 'extracurricular-add', 'extracurricular-edit', 'extracurricular-delete']) ? 'active' : null }}"
                            href="/extracurricular"><i class="bi bi-building"></i> Extracurricular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ in_array(Request::segment(1), ['teacher', 'teacher-add', 'teacher-edit', 'teacher-delete']) ? 'active' : null }}"
                            href="/teacher"><i class="bi bi-people"></i> Teacher</a>
                    </li> --}}
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::segment(1) === 'logout' ? 'active' : null }}"
                            href="/logout">Logout <i class="bi bi-box-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container box-c">
        <nav aria-label="breadcrumb breadcrumb-c">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house"></i> Home</a></li>
                @if (View::hasSection('breadcrumb'))
                    @yield('breadcrumb')
                @endif
            </ol>
        </nav>

        <div class="card mb-5">
            <h3 class="card-header">
                @yield('header')
            </h3>
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
