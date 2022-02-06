<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
@extends('layouts.app')
    <body>
        @section('title')
    　　　出品した商品・出品
　　　　@endsection
        <!--<h1>出品・出品した商品</h1>-->
        @section('content')
          <section>
                  <br>
                  <br>
                    <div class="section-title">
                        <h3 style="text-align:center;">出品のやり方</h1>
                    </div>
                   <br>
                   <br>
                    <div class="secton-content　container" style="">
                      <div class="row">
                        <div class="section-content-inner col">
                           <image src="/images/1.jpg" alt="画像" width=100% height=100% >
                        </div>
                        <div class="section-content-inner col">
                            <image src="/images/2.jpg" alt="画像" width=100% height=100% >
                        </div>
                        <div class="section-content-inner col">
                           <image src="/images/3.jpg" alt="画像" width=100% height=100% >
                        </div>
                      </div>    
                    </div>
                </section>  
                <br>
                <br>
        <div class="d-grid gap-2 d-md-block" style=" text-align:center;
 margin:0 auto;">        
          <button class="btn btn-primary" type="button"><a href="/users/create" class="btn btn-primary" type="button">出品</a></button>
        </div>
          <br>
          <br>
          <br>
        <div class="containr">
                    <div class="row">
                    <div class="main-contents-titile" style="text-align:center;">
            <h2>出品した商品</h2>
            <br>
          @foreach ($stocks as $stock) 
                       <div class="col-4 card" style="height:20%; margin-button:10px;" >
                        
                           <div class="col"> 
                            <div class="position-relative overflow-hidden">
                              <div class="image-list">
                                   <img class="card-img-top image-item"   src="{{ $stock->image_path }}">
                               </div>
                            </div>   
                            
                            <!--<div class="card-body">-->
                            <!--<h2 class="card-title">-->
                              <a href="/stocks/{{ $stock->id }}">{{ $stock->title }}</a>
                            <!--</h2>-->
                            <p class="card-text">{{ $stock->body }}</p>
                            <div class="" >

                               <p class="ml-1">{{$stock->fee}}円</p>
                              </div>
                            <div class="buy">

                            <p class="edit"><a href="/users/{{$stock->id}}/edit" class="btn btn-primary">編集</a><p>
                            
                            <form action="/users/{{ $stock->id }}" id="form_delete" method="post">
                                @csrf
                                @method('DELETE')
                                   <input type="submit" style="display:none">
                                   <p class="delete">[<span onclick ="return deletePost(this);">削除</span>]</p> 
                            </form>
                            
                          
                         </div>
                      </div>
                    @endforeach
        　  
        
                    </div>
        </div>
       
        <a href="/">HOME</a>
        <a href="/users/mypage">mypage</a>
        @endsection 
        
        <script>
            function deletePost(e) {
                'use strict';
                if (confirm('削除すると復元できません\n本当に削除しますか?')){
                    document.getElementById('form_delete').submit();
                }
                
            }
            
        </script>
    </body>
</html>
