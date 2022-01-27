<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
   public function getByLimit(int $limit_count = 10)
     {
       return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
     }
   protected $fillable = ['title','body','fee','image_path'];

   public function images()
   {
       return $this->hasMany("App\Image");
   }
}
