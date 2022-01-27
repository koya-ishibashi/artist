
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ART</title>
        
    </head>
    <body>
         
         <h1>出品</h1>
         <form action="/stocks" method="POST" enctype="multipart/form-data">
         @csrf
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
            </div>
            
            <div class="imgpath">
                
                 <input type="file" id="file" name="file[][image]"  placeholder="画像添付" value=" {{old("stock.image_path")}}" multiple >
                 <buttom type="submit">画像アップロード</buttom>
               
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        
    </body>
</html>