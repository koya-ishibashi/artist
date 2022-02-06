<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Stock $Stock, Request $request){
        $like=New Like();
        $like->stock_id=$stock->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }
    
     public function unlike(Stock $stock, Request $request){
        $user=Auth::user()->id;
        $like=Like::where('stock_id', $stock->id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
}
