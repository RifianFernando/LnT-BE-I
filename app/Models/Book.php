<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'stock',
        'writer',
        'category_id'
    ];


    public function category(){
        return $this->hasMany(category::class, 'foreign_key');
    }
}
