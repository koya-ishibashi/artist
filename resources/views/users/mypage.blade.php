<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mypage</title>

       
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    @extends('layouts.app')
    
    
    <body>
        
@section('title')
    プロフィール編集
@endsection
@section('content')
        
       <div class="container"  id="profile-edit-form">  
        <div class="row">
         <div class="col-8 offset-2 bg-white">
            <div class="font-weight-bold text-center border-bottom pb-3 pt-3" style="font-size: 24px">マイページ</div>
     　　            <span class="avatar-form image-picker">
                        <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
                        <label for="avatar" class="d-inline-block">
                            <img src="/images/avatar-default.svg" class="rounded-circle rounded float-start" style="object-fit: cover; width: 200px; height: 200px;">
                        </label>
                    </span>

                       <div class="mypage" >
                            <p class="name">{{ $mypage->name }}</p>
                            <p class="body">{{ $mypage->body }}</p>
                            <p class="address">{{ $mypage->address }}</p>
                            <p class="tel">{{ $mypage->tel }}</p>
                         </div>
                       
              
        
             <!--<div h1="">-->
             <!--  ニックネーム・自己紹介　 <button><a href="/profile/info">作成</a></button>-->
             <!--</div>-->
             <div class="my">
          
              </div>
              <div class="">
                 <a href="/users/listing" class="btn btn-outline-primary">出品した商品・出品</a>
                 <a href="/profile/info" class="btn btn-outline-primary">ユーザー情報</a>
                 <!--<a href="/user/payment/form">口座番号</a>-->
                 <!--<a href="/">購入した商品</a>-->
                 <a href="/" class="btn btn-outline-primary">いいね数</a>
               </div>
               <a href="/">HOME</a>
          </div>
        </div>
       </div>   
       @endsection
    </body>
</html>
