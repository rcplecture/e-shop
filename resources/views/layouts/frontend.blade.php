<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Foodshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    @yield('style')
</head>
<body>

@include('includes.header')

@yield('content')

@include('includes.footer')
<!-- footer section ends -->

<script src="{{ asset('js/script.js') }}"></script>
@yield('script')

</body>
</html>
