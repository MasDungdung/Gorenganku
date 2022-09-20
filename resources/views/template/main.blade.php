<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $judul }} - Mazer Admin Dashboard</title>
    {{-- extension css --}}
    @include('template.partial.ext_css')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            {{-- extension menu --}}
            @include('template.partial.menu')
        </div>
        <div id="main">
            @yield('konten')
        </div>
    </div>
    <!-- extension js -->
    @include('template.partial.ext_js')
</body>

</html>
