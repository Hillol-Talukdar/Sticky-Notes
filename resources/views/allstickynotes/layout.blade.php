<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" />

    <title>Sticky Notes</title>
</head>
<body>

    @yield('headerContent')

    <div class="container">
            @yield('content')
    </div>

</body>
</html>