<?php

namespace App\Http\Controllers;

use App\Stock;
// 画像作成
use Storage;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;

class StockController extends Controller
{
     public function userIndex(Stock $stock)
      {
         return view('/users/listing')->with(['stocks' => $stock->getByLimit()]); 
          
      }
      
      //indexRequestができない
      
      
      
     public function store(IndexRequest $request, Stock $stock)
      {

        $input = $request['stock'];
          //s3アップロード開始
          
        $image = $input['image_path'];

      // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        // dd(Storage::disk('s3')->url($path));
        $input['image_path']=Storage::disk('s3')->url($path);
        // dd($input);
         $stock->fill($input)->save();
        //  foreach ($request->file('file') as $index=> $e) {
        //      $img=new Image;
        //       $path = Storage::disk('s3')->putFile('myprefix', $e['image'], 'public');
      
        //      $img->image_path  = Storage::disk('s3')->url($path);
        //      $img->stock_id=$stock->id;

        //      $img->save();
           
                
        //     }
           return redirect('users/listing');
       }
     public function index(Stock $stock)
       {
          return view('index')->with(['stocks' => $stock->getByLimit()]); 
          


       }
       
       
       
       //S3との画像表示処理
       
      public function show(Request $request)
        {
          $img = Image::all();
          return view('users.listing', ['Image' => $img]);
          
        //   $like=Like::where('stock_id', $stock->id)->where('user_id', auth()->user()->id)->first();
        //   return view('/', compact('stock', 'like'))->with(['likes' => $like->getByLimit()]); 
         }
       
       
      public function userForm(Stock $stock)
      {
        
        
         return view('/user/payment/form')->with(['stock' => $stock]); 


      }
      //編集画面の作成
         
      public function edit(Stock $stock)
      {
    
        
         return view("/users/edit")->with(['stock' => $stock]);

      }
      
      //update
      
       public function update(IndexRequest $request, Stock $stock)
      {
               
        $input = $request['stock'];
        $image=$input['image_path'];
    
    //   dd($request->file('image'));
      // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        // dd(Storage::disk('s3')->url($path));
         $input['image_path']=Storage::disk('s3')->url($path);
        // dd($input);
         $stock->fill($input)->save();
        // dd($input);
      
         
       
          return redirect('/users/listing');
      }
      
      
      
      //delete
      
     public function delete(Stock $stock)
     {
         
         $stock->delete();
          return redirect('/users/listing');
    }
    
    
}