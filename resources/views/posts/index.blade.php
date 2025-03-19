<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
</head>

<body>

    <h1>All Posts in Blade</h1>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
    @endforeach


</body>

</html>
