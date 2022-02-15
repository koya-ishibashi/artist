
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
          <div class="container"  id="profile-edit-form"> 
            <div class="row">
                <div class="col-8 offset-2 bg-white">
           <div class="font-weight-bold text-center border-bottom pd-3 pt-3" style="font-size:24px;">
               商品を出品
           </div>
         <form action="/stocks" method="POST" enctype="multipart/form-data">
         @csrf
           <br>
           <br>
           
             <div class="imgpath" style="margin-left:7px;">
                 <h2 style="font-size:23px;">商品画像</h2>
                 <input type="file" id="file" name="stock[image_path]" style="width:35%; margin-left:15px;"  placeholder="画像添付" value=" {{old("stock.image_path")}}" multiple >

                 <!--<button type="submit">画像アップロード</button>-->
                  <p class="image_path__error" style="color:red">{{ $errors->first('stock.image_path') }}</p>              
               
            </div>
            <div class="title" style="margin-left:7px;">
                <h2 style="font-size:23px;">アイテム名</h2>
                <input type="text" name="stock[title]" placeholder="タイトル"  style="width:35%; margin-left:15px;" value=" {{old("stock.title")}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('stock.title') }}</p>
            </div>
            
            <div class="body" style="margin-left:7px;">
                <h2 style="font-size:23px;">アイテムの紹介</h2>
                <textarea name="stock[body]" placeholder="今日もお疲れ様でした" value=" {{old("stock.body")}}" style="height: 100px; width :70%; margin-left:15px;"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('stock.body') }}</p>
            </div>
            
            <div class="fee" style="margin-left:7px;">
                <h2 style="font-size:23px;">販売価格</h2>
                <input type="number" name="stock[fee]" placeholder="金額を入力してください" style="width:35%; margin-left:15px;" value=" {{old("stock.fee")}}" >
                                <p class="fee__error" style="color:red">{{ $errors->first('stock.fee') }}</p>
            </div>
            
            
         <div style="margin-left:25px;">   <input type="submit" class="btn btn-outline-primary"  value="保存"/></div>
        </form>
        <div class="back" style="text-align:center;">[<a href="/">back</a>]</div>
        </div>
        </div>
        </div>
        @endsection
    </body>
</html>