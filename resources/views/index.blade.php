<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
         <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
                margin-top: 70px;
                  }
                
            

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">
                    EC site for college students
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">picture</a>
                    <a href="https://laracasts.com">painting</a>
                    <a href="https://laravel-news.com">sculpyure</a>
                    <a href="https://blog.laravel.com">Glass</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                
                <HR SIZE="10">        
                <section>
                    <div class="section-title">
                        出品のやり方
                    </div>
                    <div class="secton-content">
                        <div class="section-content-inner1">
                           <image src="/Users/kouya/Downloads/May 27 • 2 PM to 5 PM 123 Anywhere St. Any City/1.jpg" alt="画像" >
                        </div>
                        <div class="section-content-inner2">
                            bbbbbbbbbbbbbbbb
                        </div>
                        <div class="section-content-inner3">
                            cccccccccccccccc
                        </div>
                    </div>
                </section>  
                <HR SIZE="10">
                //作品投稿スタート
                <div class="main-contents">
                    <div class="main-contents-titile">
                        作品一覧（おすすめ順、ランキング）
                    </div>
                    <div class="main-contents-mains">
                    @foreach ($stocks as $stock) 
                       <div class="stock">
                         <h2 class="stock-title">
                           <a href="/stocks/{{ $stock->id }}">{{ $stock->title }}</a>
                          </h2>
                         <p class="body">{{ $stock->body }}</p>
                         <p class="fee">{{$stock->fee}}円</p>
                         <div class="buy">
                            <input type="submit" value="購入"/>
                         </div>
                       </div>
                    @endforeach
                    </div>
                    <span class="border border-primary">
                    <div class="card" style="width: 18rem;">
                      <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </span>
                   </div> 
                </div>
                
                
                
            </div>
        </div>
    </body>
</html>
