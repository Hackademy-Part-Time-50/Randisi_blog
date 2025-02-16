<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [ "title","category_id" ,"description","visible","body"];

    public function categories() {

           return $this->belongsToMany(Category::class); 
    }

}