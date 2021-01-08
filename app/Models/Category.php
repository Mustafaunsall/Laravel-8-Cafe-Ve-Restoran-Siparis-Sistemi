<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends=['parent'];//her yerden erişebilmek için


    //one to many
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //one to many inverse -tersi
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    //one to many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

}
