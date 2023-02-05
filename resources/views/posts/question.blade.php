<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Question</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='questions'>
            <h1>質問一覧</h1>
            @foreach($questions as $question)
                <div class='university'>
                    <a href="/questions/{{ $question->id }}">{{ $question->text }}</a>
                </div>
            @endforeach
        </div>
    </body>
</html>