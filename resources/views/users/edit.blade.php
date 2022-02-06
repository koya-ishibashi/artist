   <body>
        <h1>出品編集</h1>
        <form action="/users/{{$stock->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
            <div class="title">
                <h2>アイテム名</h2>
                <input type="text" name="stock[title]" placeholder="タイトル" value=" {{ $stock->title}}"/>
                
            </div>
            <div class="body">
                <h2>アイテム詳細</h2>
                <textarea type="text" name="stock[body]" placeholder="今日もお疲れ様でした">{{ $stock->body}}</textarea>
            </div>
            <div="fee">
                <input type="number" name="stock[fee]" placeholder="金額を入力してください" value=" {{old("stock.fee")}}" >
                 
            </div>
            
            <div class="imgpath">
                  <input type="file" id="file" name="stock[image_path]"  placeholder="画像添付" value=" {{old("stock.image_path")}}" multiple >

                  <button type="submit">画像アップロード</button>
             
            </div>
            
            <input type="submit" value="update"/>
        </form>
        <div class="back">[<a href="/users/listing">back</a>]</div>
    </body>
