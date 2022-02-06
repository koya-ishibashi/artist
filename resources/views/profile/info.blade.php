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
    　　　ユーザー情報
　　　　@endsection
　　　　@section('content')
　　　　<div class="container"  id="profile-edit-form">  
　　　　 <div class="row">
　　　　   <div class="col-8 offset-2 bg-white">
          <form action="/mypage" method="POST" >
         @csrf
         <br>
         <br>
            <div class="name" style="margin-left:7px;">
                <h2 style="font-size:23px;">ニックネーム</h2>
                <input type="text" name="mypage[name]" class="form-control" style="width:35%; margin-left:15px;" placeholder="ニックネーム" value=" {{old("mypage.name")}}"/>
                <p class="name__error" style="color:red">{{ $errors->first('mypage.name') }}</p>
               
            </div>
            
            <div class="text" style="margin-left:7px;">
                <h2 style="font-size:23px;">自己紹介</h2>
                <textarea name="mypage[body]" class="form-control" id="floatingTextarea2" style="height: 100px; width :70%; margin-left:15px;" placeholder="私はA大学に通っている学生です。現在はBのような活動をしています。もしよければ私の作品を見に来てください" value=" {{old("stock.body")}}"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('mypage.body') }}</p>
            </div>
            <div class="address" style="margin-left:7px;" name="mypage[address]">
                <h3 style="font-size:23px;">住所記載</h3>
                                <p class="address__error" style="color:red">{{ $errors->first('mypage.address') }}</p>
                   <div class="col-md-2">
                         <label for="inputZip" class="form-label">郵便番号</label>
                           <input type="text" name="mypage[address]" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">都道府県・市区町村</label>
                        <input type="text" name="mypage[address]" class="form-control" id="inputCity">
                    </div>
                   <div class="col-12">
                     <label for="inputAddress" class="form-label">番地・建物名</label>
                     <input type="text" name="mypage[address]" class="form-control" id="inputAddress" placeholder="1234 Main St">
                   </div>
                   <!--<div class="col-12">-->
                   <!--   <label for="inputAddress2" class="form-label">建物名</label>-->
                   <!--   <input type="text" name="mypage[address]" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">-->
                   <!--</div>-->
                   <!--<div class="col-md-6">-->
                   <!--     <label for="inputCity" class="form-label">都道府県・市区町村</label>-->
                   <!--     <input type="text" name="mypage[address]" class="form-control" id="inputCity">-->
                   <!-- </div>-->
                    <div class="col-md-4" style="display:none;">
                         <label for="inputState" name="mypage[address]" class="form-label">State</label>
                         <select id="inputState" class="form-select">
                             <option selected>Choose...</option>
                              <option>...</option>
                         </select>
                   </div>
                   <!--<div class="col-md-2">-->
                   <!--      <label for="inputZip" class="form-label">郵便番号</label>-->
                   <!--        <input type="text" class="form-control" id="inputZip">-->
                   <!-- </div>-->
                 <!--<textarea name="mypage[address]"></textarea>-->
            </div>
            
            <div class="tel mb-3 row" style="margin-left:5px; margin-top:25px;">
        
                <h3 style="font-size:23px;">電話番号</h3>
                <div class="col-sm-10">
                 <input type="tel"  name="mypage[tel]" placeholder="00-0000-0000" size="15" maxlength="15">
                 <p class="tel__error" style="color:red">{{ $errors->first('mypage.tel') }}</p>
                </div> 

            </div>
            
            <input type="submit" class="btn btn-outline-primary"  value="確定"/>
        </form>
        <div class="back" style="text-align:center;">[<a href="/">back</a>]</div>
        </div>
        </div>
        </div>
        @endsection
    </body>
</html>