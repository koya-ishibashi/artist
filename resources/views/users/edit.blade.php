   <body>
        <h1>出品編集</h1>
        <form action="/users/{{$stock->id}}" method="POST">
        @csrf
        @method("PUT")
            <div class="title">
                <h2>アイテム名</h2>
                <input type="text" name="stock[title]" placeholder="タイトル" value=" {{ $stock->title}}"/>
            </div>
            <div class="body">
                <h2>アイテム詳細</h2>
                <textarea name="stock[body]" placeholder="今日もお疲れ様でした"value=" {{ $stock->body}}"></textarea>
            </div>
            
            <div="fee">
                <input type="number" name="stock[fee]" placeholder="金額を入力してください" value=" {{old("stock.fee")}}" >
            </div>
            
            <input type="submit" value="update"/>
        </form>
        <div class="back">[<a href="/users/{{$stock->id}}">back</a>]</div>
    </body>
