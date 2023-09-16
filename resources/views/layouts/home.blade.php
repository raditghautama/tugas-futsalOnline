<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- style --}}
    <link rel="stylesheet" href="{{url('assets/style/style.css')}}">
    {{-- BOXICON --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap.min.css') }}">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light ">
    <div class="container ">
        <a class="navbar-brand fw-bold" href="#">futsalkraksaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Category</a>
                </li>
            </ul>
            <form action="#" method="get">
                <div class="d-flex align-items-center gap-2">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">#BOOKING</span>
                        <input type="text" class="form-control" placeholder="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary px-3">Cari</button>
                </div>
            </form>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<main class="py-4">
    @yield('content')
</main>

    <script src="{{ url('assets/vendors/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
