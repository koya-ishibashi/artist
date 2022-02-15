  <!DOCTYPE HTML>
  <html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ART</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
      @extends('layouts.app')
  <body>
      @section('title')
           出品物の編集
         @endsection
         
         
          @section('content')
          <div class="container"  id="profile-edit-form"> 
            <div class="row">
                <div class="col-8 offset-2 bg-white">
           <div class="font-weight-bold text-center border-bottom pd-3 pt-3" style="font-size:24px;">
               出品の編集
           </div>
        <form action="/users/{{$stock->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
             <div class="imgpath" style="margin-left:7px;">
                 <h2 style="font-size:20px;">商品画像</h2>
                 <input type="file" id="file" name="stock[image_path]"  placeholder="画像添付" style="width:35%; margin-left:15px;"   value=" {{old("stock.image_path")}}" multiple >
                 <p class="image_path__error" style="color:red">{{ $errors->first('stock.image_path') }}</p>              
                  <!--<button type="submit">画像アップロード</button>-->
             
            </div>
            <div class="title"  style="margin-left:7px; margin-top:10px; ">
                <h2　style="font-size:20px;">アイテム名</h2>
                <br>
                <input type="text" name="stock[title]" placeholder="タイトル" style="width:35%; margin-left:15px;"  value=" {{ $stock->title}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('stock.title') }}</p>
            </div>
            <div class="body"  style="margin-left:7px; margin-top:10px;">
                <h2　style="font-size:20px;">アイテム詳細</h2>
                <br>
                <textarea name="stock[body]" placeholder="今日もお疲れ様でした" style="height: 100px; width :70%; margin-left:15px;">{{ $stock->body}}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('stock.body') }}</p>
            </div>
            <div class="fee" style="margin-left:7px;">
                 <h2 style="font-size:20px;">販売価格</h2>
                <input type="number" name="stock[fee]" style="width:35%; margin-left:15px;"  placeholder="金額を入力してください" value=" {{old("stock.fee")}}" >
                                               <p class="fee__error" style="color:red">{{ $errors->first('stock.fee') }}</p>
            </div>
            
           
            
             <div style="margin-left:25px; margin-top:15px;"> <input type="submit" class="btn btn-outline-primary" value="update"/></div>
        </form>
        <div class="back" style="text-align:center;">[<a href="/users/listing">back</a>]</div>
        </div>
        </div>
        </div>
         @endsection
    </body>
</html>    
