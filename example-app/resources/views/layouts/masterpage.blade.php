<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

    <div class="header">
        @include('section.header') 
    </div>

    <div class="sidebar">
        @include('section.sidebar') 
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        @include('section.footer') 
    </div>

</body>
</html>
