<?php

namespace App\Http\Controllers;

use App\Stock;
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
         return redirect('users/listing');
       }
     public function index(Stock $stock)
       {
          return view('index')->with(['stocks' => $stock->getByLimit()]); 
       }
      
}