<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" />

    <title>Sticky Notes</title>
</head>
<body>

    <div class="container">
        <div class="box_container">
            @yield('content')
        </div>
       
    </div>

</body>
</html>