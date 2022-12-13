<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        @include('items.head')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        {{-- <link href="dasboard/css/styles.css" rel="stylesheet" /> --}}
        {{-- <link rel="stylesheet" href="{{ 'dashboard/css/styles.css' }}"> --}}
        <link rel="stylesheet" href="{{ asset ('dashboard') }}/css/styles.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset ('dashboard') }}/js/scripts.js"></script>
        {{-- <script src="{{ 'dashboard/js/scripts.js' }}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset ('dashboard') }}/assets/demo/chart-area-demo.js"></script>
        {{-- <script src="{{ 'dashboard/assets/demo/chart-area-demo.js' }}"></script> --}}
        <script src="{{ asset ('dashboard') }}/assets/demo/chart-bar-demo.js"></script>
        {{-- <script src="{{ 'dashboard/assets/demo/chart-bar-demo.js' }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset ('dashboard') }}/js/datatables-simple-demo.js"></script>
        {{-- <script src="{{ 'dashboard/js/datatables-simple-demo.js' }}"></script> --}}
    </body>
</html>