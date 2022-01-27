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
          <section>
                    <div class="section-title">
                        出品のやり方
                    </div>
                    <div class="secton-content">
                        <div class="section-content-inner">
                           <image src="/images/1.jpg" alt="画像" width=20% height=20% >
                        </div>
                        <div class="section-content-inner">
                            <image src="/images/2.jpg" alt="画像" width=20% height=20% >
                        </div>
                        <div class="section-content-inner">
                           <image src="/images/3.jpg" alt="画像" width=20% height=20% >
                        </div>
                    </div>
                </section>  
        <p class="create">[<a href="/users/create">出品</a>]</p>
        <div class="stocks">
            <h2>出品した商品</h2>
           @foreach ($stocks as $stock) 
             <p class="edit"><a href="/users/{{$stock->id}}/edit">編集</a><p>
             <div class="stock">
                <h2 class="title">
                    <a href="/stocks/{{ $stock->id }}">{{ $stock->title }}</a>
                </h2>
                <p class="body">{{ $stock->body }}</p>
                <p class="fee">{{$stock->fee}}円</p>
                <p class="images">
              @if ($stock->image_path)
                <img src="{{$stock->image_path}}">
              @endif    
              </p>
              
             </div>
        　  @endforeach
        　     
        </div>
        <a href="/">HOME</a>
        <a href="/users/mypage">mypage</a>
    </body>
</html>
