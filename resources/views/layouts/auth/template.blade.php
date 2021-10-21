<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('') }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="description" content="{{ config('app.name') }}" />
    <meta name="keywords" content="{{ config('app.name') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:url" content="{{ url('') }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <link rel="canonical" href="{{ url('') }}" />
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('') }}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="bg-dark">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ asset('') }}assets/media/illustrations/sigma-1/14-dark.png">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="{{ url('') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset('logo.png') }}" class="h-50px" />
                </a>
                @yield('content')
            </div>
            <div class="d-flex flex-center flex-column-auto p-10">
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="{{ url('') }}" class="text-muted text-hover-primary px-2">{{ config('app.name') }}</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('') }}assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('') }}assets/js/scripts.bundle.js"></script>
</body>

</html>
