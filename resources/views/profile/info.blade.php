<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ART</title>
        
    </head>
    <body>
    
          <form action="/my" method="POST" >
         @csrf
            <div class="name">
                <h2>ニックネーム</h2>
                <input type="text" name="mypage[name]" placeholder="ニックネーム" value=" {{old("mypage.name")}}"/>
                <p class="name__error" style="color:red">{{ $errors->first('mypage.name') }}</p>
            </div>
            
            <div class="text">
                <h2>自己紹介</h2>
                <textarea name="mypage[body]" placeholder="私はA大学に通っている学生です。現在はBのような活動をしています。もしよければ私の作品を見に来てください" value=" {{old("stock.body")}}"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('mypage.body') }}</p>
            </div>
            <div class="address">
                <h3>住所記載</h3>
                 <textarea name="mypage[address]"></textarea>
            </div>
            
            <div class="tel">
                <h3>電話番号</h3>
                <input type="tel" name="mypage[tel]" placeholder="00-0000-0000" size="15" maxlength="15">

            </div>
          
          
            
            
            <input type="submit" value="確定"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        
    </body>
</html>