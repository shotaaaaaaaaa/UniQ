<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>University</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='universities'>
            <h1>大学一覧</h1>
            @foreach($universities as $university)
                <div class='university'>
                    <a href="/categories/{{ $university->id }}">{{ $university->name }}</a>
                </div>
            @endforeach
        </div>
    </body>
</html>