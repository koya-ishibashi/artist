<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Art</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="css/index.css">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
               // align-items: center;
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

           
                
            

          

            .m-b-md {
                margin-bottom: 30px;
         body {
     background-color: #fff;
     color: #636b6f;          
     font-family: 'Nunito', sans-serif;
     font-weight: 200;
     height: 100vh;
     margin: 0;
}

header{
    height: 60px;
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
.title{
     font-size: 50px;
                margin-top: 70px;
                  text-align: center;
}
.links >a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
            }
            </style>
      
<!-- .section-title{-->
<!--       text-align: center;-->
<!--       font-size: 25px;-->
<!--}     -->

<!--section .section-content{-->
<!--    float: left;-->
<!--    display: flex;-->
<!--    justify-content:flex-end;-->
<!--}-->
<!--.stock{-->
<!--    position: relative;-->
<!--    display: flex;-->
<!--    justify-content: center;-->
<!--    min-width: 0;-->
<!--    word-wrap: break-word;-->
<!--    background-color: #fff;-->
<!--    background-clip: border-box;-->
<!--    border: 1px solid rgba(0,0,0,.125);-->
<!--    border-radius: 0.25rem;-->
<!--    width: 23rem;-->
<!--    height: 23rem;-->
<!--}-->
<!--.stock-body{-->
<!--    lex: 1 1 auto;-->
<!--    flex-grow: 1;-->
<!--    flex-shrink: 1;-->
<!--    flex-basis: auto;-->
<!--    padding: 1rem 1rem;-->
<!--    padding-top: 1rem;-->
<!--    padding-right: 1rem;-->
<!--    padding-bottom: 1rem;-->
<!--    padding-left: 1rem;-->
<!--}       -->

        /* <!--   }-->*/
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
      
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{url('/users/mypage')}}">mypage</a>
                        <a href="{{ url('/home') }}">logout</a>
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
                    <br>    
                    <br>
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
                <br>
                <HR SIZE="10">
                
                <div class="main-contents">
                    <div class="main-contents-titile">
                        作品一覧（おすすめ順、ランキング）
                    </div>
                    <div class="main-contents-mains container card">
                    @foreach ($stocks as $stock) 
                       <div class="stock" >
                           {{--imagesの写真--}}
                        <div class="images" card-img-top>
                            @foreach($stock->images as $image)
                             <img class="imgpath"  src="{{ $image->image_path }}">
                            @endforeach
                        </div>   
                        
                        <div class="stock-body">
                         <h2 class="stock-title card-title">
                           <a href="/stocks/{{ $stock->id }}">{{ $stock->title }}</a>
                         </h2>
                         <p class="body card-text">{{ $stock->body }}</p>
                         <p class="fee">{{$stock->fee}}円</p>
                         <!--<p class="image"></p>-->
                         <div class="buy">
                          <button><a href="/stocks/{{ $stock->id }}/create" class="btn btn-primary">購入</a></button>
                         </div>
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
                   
                   <div class="card" style="width: 18rem;">
                     <img src="..." class="card-img-top" alt="...">
                       <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                       </div>
                   </div>
                </div>
                
                
                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
