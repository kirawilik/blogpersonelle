<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'categories';

   protected $fillable = ['titre'];   
   public function article()
{
    return $this->hasMany(Article::class, 'category_id');
}                      
}
