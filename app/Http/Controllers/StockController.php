<?php

namespace App\Http\Controllers;

use App\Stock;
// 画像作成
use Storage;
use App\Image;
use Illuminate\Http\Request;

class StockController extends Controller
{
     public function userIndex(Stock $stock)
      {
         return view('/users/listing')->with(['stocks' => $stock->getByLimit()]); 
          
      }
     public function store(Request $request, Stock $stock)
      {
        
        $input = $request['stock'];
         $stock->fill($input)->save();
         foreach ($request->file('file') as $index=> $e) {
             $img=new Image;
               $path = Storage::disk('s3')->putFile('myprefix', $e['image'], 'public');
      
             $img->image_path  = Storage::disk('s3')->url($path);
             $img->stock_id=$stock->id;

             $img->save();

                
            }
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
       
}