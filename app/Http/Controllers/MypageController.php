<?php

namespace App\Http\Controllers;

use App\Mypage;
use Illuminate\Http\Request;
use App\Http\Requests\StockRequest;


class MypageController extends Controller
{
//   public function store(Request $request, Mypage $mypage)
//         {
       
//         $input = $request['mypage'];
//          $mypage->fill($input)->save();
//          return redirect('users/mypage');
//       }       

      public function store(StockRequest $request, Mypage $mypage)
        {
       
        //   dd($mypage);
        $input = $request['mypage'];
         $mypage->fill($input)->save();
        
         return redirect('users/mypage')->with(['mypage' => $mypage->latest()->first()]);
        }       
      public function create(mypage $mypage)
          {
         return view('/profile/info')->with(['mypage' => $mypage]); 
    
           }
    //      public function error(Mypage $mypage, StockRequest $request) 
    //      {
             
    //             $input = $request['mypage'];
    //             $mypage->fill($input)->save();
    //             return redirect('/profile/info' . $mypage->id);
    // }


}
