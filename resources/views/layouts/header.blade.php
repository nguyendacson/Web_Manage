<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','Default title')</title>
        <link href="{{ asset('css/custommessage.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    </head>
        <body class="px-2">
            <header class="px-2">
                <nav class="navbar navbar-light bg-light">
                    <form class="d-flex" action="">
                        <div class="row">
                            <div class="d-flex">
                                <input name="key" class="form-control col-md-5" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success col-md-3" style="margin-left:10px" type="submit">Search</button>
                            </div>
                        </div>
                    </form>    
                </nav>
            </header>
            
            <main class="px-2 mt-2">
                @yield('content')
                <script src="{{ asset('js/custommessage.js') }}"></script>
            </main>

            <footer>
                <div class="container-fluid d-flex px-0 my-3" style="background: #6edff6 ; align-items: center ; justify-content: center">END</div>
            </footer>
            <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        </body>
</html>
