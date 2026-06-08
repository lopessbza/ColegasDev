<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset('colegasdev/css/style.css') }}">
</head>

<body>
    <div class="page-wrapper">
        @include('partials.preloader')

        @include('partials.header')


        <main>
            @yield('content')



        </main>
        @include('partials.scroll')
        @include('partials.footer')

    </div>

    @include('partials.script')

</body>


</html>