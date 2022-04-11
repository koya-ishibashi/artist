<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    
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

            .full-height {
                height: 100vh;
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
               display:block;
               margin:175px;
            }

            .title {
                font-size: 74px;
                margin-top:75px;
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
      <!--      .image-list{-->
      <!--         overflow-x: auto;-->
      <!--         white-space: nowrap;-->
      <!--        -webkit-overflow-scrolling: touch;-->
      <!--      }-->
            
            .image-item{display:flex;
              overflow-x:scroll;
      <!--         display: inline-block;-->
      <!--         width: 90%;-->
           

      <!--/* 見た目調整 */-->
      <!--        height: 400px;-->
      <!--        margin: 16px;-->
      <!--        font-size: 48px;-->
    
            }
        </style>

    </head>
    <body>
       
      
        <div class="navbar navbar-expand-md navbar-dark">
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
           <div class="content-size">

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
           </div>
           
                  
                    <br>    
                    <br>
                <section>
                 <div class="p-3 mb-2 bg-light text-dark">   

                    <div class="section-title" style="text-align:center;">
                        出品のやり方
                    </div>
                    <div class="container" style="width:70%;">
                      <div class="row">    
                        <div class="col">
                           <image src="/images/1.jpg" alt="画像" width=100% height=100% >
                        </div>
                        <div class="col">
                            <image src="/images/2.jpg" alt="画像" width=100% height=100% >
                        </div>
                        <div class="col">
                           <image src="/images/3.jpg" alt="画像" width=100% height=100% >
                        </div>
                      </div>    
                    </div>
                 </div>

                </section>  
                <br>
              
                <br>
                
                <div class="containr">
                    <div class="row">
                    <div class="main-contents-titile" style="text-align:center;">
                        作品一覧（おすすめ順、ランキング）
                    </div>
                    <!--<div class="main-contents-mains container card" style="width: 18rem;">-->
                       <br>
                        <br>
               
                    @foreach ($stocks as $stock) 
                    <div class="col-4 card d-flex" style="height:20%; margin-button:10px;" >
                     
                         <!--<div class="card container" style="width: 18rem;">-->
                          
                           <div class="col"> 
                            <div class="position-relative overflow-hidden">
                              
                              
                                　<div class="image-list">
                                   <img class="card-img-top image-item"   src="{{ $stock->image_path }}">
                                  </div>
                             
                            </div>   
                        
                            <!--<div class="card-body" >-->
                            <!--<h2 class="card-title">-->
                              <a href="/stocks/{{ $stock->id }}">{{ $stock->title }}</a>
                            <!--</h2>-->
                            <p class="card-text">{{ $stock->body }}</p>
                            <!--<div class="position-absolute py-2 px-3" style="left: 0; bottom: 35%; color: white; background-color: rgba(0, 0, 0, 0.70)">-->

                               <p class="ml-1">{{$stock->fee}}円</p>
                              <!--</div>-->
                            <div class="buy">
                          <a href="/stocks/{{ $stock->id }}/create" class="btn btn-primary">購入</a>
                            </div>
                         
                         
<!-- //いいね -->
         
                           
                          
                         </div>
                      </div>
                    @endforeach
                          
                    <!--</div>-->
                   <!-- <span class="border border-primary">-->
                   <!-- <div class="card" style="width: 18rem;">-->
                   <!--   <img src="..." class="card-img-top" alt="...">-->
                   <!--     <div class="card-body">-->
                   <!--     <h5 class="card-title">Card title</h5>-->
                   <!--      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                   <!--     <a href="#" class="btn btn-primary">Go somewhere</a>-->
                   <!-- </div>-->
                   <!-- </span>-->
                   <!--</div> -->
                   
                   <!--<div class="card" style="width: 18rem;">-->
                   <!--  <img src="..." class="card-img-top" alt="...">-->
                   <!--    <div class="card-body">-->
                   <!--       <h5 class="card-title">Card title</h5>-->
                   <!--       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                   <!--       <a href="#" class="btn btn-primary">Go somewhere</a>-->
                   <!--    </div>-->
                   <!--</div>-->
                </div>
                </div>
                
                
                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        
    

    </body>
</html>
