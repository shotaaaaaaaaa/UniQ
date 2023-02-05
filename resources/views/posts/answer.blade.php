<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Answer</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='answers'>
            <h1>回答</h1>
            @foreach($answers as $answer)
                <div class='answer'>
                    <p>{{ $answer->text }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>