<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    <head>
        <meta charset="utf-8">
        <title>Category</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="public/styles.css" >
    </head>
    <body>
        <div class='categories'>
            <h1>カテゴリー</h1>
            @foreach ($categories as $category)
                <div class='category'>
                    <a href="/posts/{{ $category->id }}">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
    </body>
</html>