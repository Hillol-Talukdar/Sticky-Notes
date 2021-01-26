<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Notes</title>
</head>
<body>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/create.css') }}" />

    <div class="container">
        <h1 >Write your notes</h1>

        <form method="post" action="/stickynotes/create" >
            @csrf
            <input type="text" name="title" >
            <input type="submit" value="Create" class="create_button">
        </form>

    </div>
</body>
</html>