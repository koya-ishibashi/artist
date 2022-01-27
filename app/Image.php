<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['image_path','stock_id'];
    
    public function stock()
    {
        $this->belongsTo("App\Stock");
    }
}
