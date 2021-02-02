<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>Product Comparison | @yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-danger">
            <div class="container-fluid px-4">
                <a href="{{ route('products') }}" class="navbar-brand mb-0 h1">Product Comparison</a>
            </div>
        </nav>
    </header>
        
    <main class="mt-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>