
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ART</title>
        
    </head>
        @extends('layouts.app')
    <body>
         @section('title')
           出品
         @endsection
       
         @section('content')
           <h1>出品</h1>
         <form action="/stocks" method="POST" enctype="multipart/form-data">
         @csrf
            <div class="container"  id="profile-edit-form"> 
            <div class="row">
                <div class="col-8 offset-2 bg-white">
            <div class="title">
                <h2>アイテム名</h2>
                <input type="text" name="stock[title]" placeholder="タイトル" value=" {{old("stock.title")}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('stock.title') }}</p>
            </div>
            
            <div class="body">
                <h2>アイテムの紹介</h2>
                <textarea name="stock[body]" placeholder="今日もお疲れ様でした" value=" {{old("stock.body")}}"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('stock.body') }}</p>
            </div>
            
            <div class="fee">
                <input type="number" name="stock[fee]" placeholder="金額を入力してください" value=" {{old("stock.fee")}}" >
                                <p class="fee__error" style="color:red">{{ $errors->first('stock.fee') }}</p>
            </div>
            
            <div class="imgpath">
                
                 <input type="file" id="file" name="stock[image_path]"  placeholder="画像添付" value=" {{old("stock.image_path")}}" multiple >

                 <button type="submit">画像アップロード</button>
                  <p class="image_path__error" style="color:red">{{ $errors->first('stock.image_path') }}</p>              
               
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        </div>
        </div>
        </div>
        @endsection
    </body>
</html>