<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
</head>
<body>


@foreach($posts as$post)
    <div>
        <h3>{{ $post->title }}</h3>
        <ul>
            @foreach($post->categories as $category)
                <li>
                    {{ $category->id }}
                </li>
            @endforeach
        </ul>
    </div>
    <hr />
@endforeach

</body>
</html>
