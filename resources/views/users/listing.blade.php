<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <h1>出品・出品した商品</h1>
        <p class="create">[<a href="/users/create">出品</a>]</p>
        <div class="stocks">
            <h2>出品した商品</h2>
           @foreach ($stocks as $stock) 
             <div class="stock">
                <h2 class="title">
                    <a href="/stocks/{{ $stock->id }}">{{ $stock->title }}</a>
                </h2>
                <p class="body">{{ $stock->body }}</p>
                <p class="fee">{{$stock->fee}}円</p>
             </div>
           @endforeach
        </div>
    </body>
</html>
