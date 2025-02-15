<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [ "title", "category","description","visible","body", "category_id"];

    public function categories() {

           return $this->belongsToMany(Category::class); 
    }

    
}