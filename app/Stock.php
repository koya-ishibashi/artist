<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
  use SoftDeletes;
    
  public function getByLimit(int $limit_count = 10)
     {
      return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
     }
   protected $fillable = ['title','body','fee','image_path'];

   public function images()
   {
       return $this->hasMany('App\Image');
   }
   //like
   public function user() {
        return $this->belongsTo('App\User');
    }
 
    public function likes() {
        return $this->hasMany('App\Like');
    }
 
}
