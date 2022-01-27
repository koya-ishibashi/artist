<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mypage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
    
     
        
      <div h1="">
          ニックネーム・自己紹介　 <button><a href="/profile/info">作成</a></button>
      </div>
      <div class="my">
          
      </div>
      <div class="">
          <a href="/users/listing">出品した商品・出品</a>
          <a href="/profile/info">個人情報</a>
          <a href="/user/payment/form">口座番号</a>
          <!--<a href="/">購入した商品</a>-->
          <a href="/">いいね数</a>
      </div>
      <a href="/">HOME</a>
    </body>
</html>
