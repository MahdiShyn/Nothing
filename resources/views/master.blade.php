<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/components.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Hello World!</title>
</head>

<body>
    @include('sections.header')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            {{--  --}}
            <div class="main-content">
                @yield('content')
            </div>
            {{--  --}}
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            @include('components.sidebar')
        </div>
    </div>
    @include('sections.footer')
</body>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

</html>
