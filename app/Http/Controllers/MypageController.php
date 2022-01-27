<?php

namespace App\Http\Controllers;

use App\Mypage;
use Illuminate\Http\Request;


class MypageController extends Controller
{
//   public function store(Request $request, Mypage $mypage)
//         {
       
//         $input = $request['mypage'];
//          $mypage->fill($input)->save();
//          return redirect('users/mypage');
//       }       

public function store(Request $request, Mypage $mypage)
        {
       
      dd($mypage);
        // $input = $request['mypage'];
        //  $mypage->fill($input)->save();
        //  return redirect('users/mypage');
      }       
      public function show(mypage $mypage)
{
    return view('/profile/info')->with(['mypage' => $mypage]); 
    
}


}
