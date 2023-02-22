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
        'category_id',
        'bookImg'
    ];


    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function Author_BookJoinTable()
    {
        return $this->belongsTo(AuthorJoinTable::class);
    }
}
