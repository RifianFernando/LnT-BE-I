<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_of_date'
    ];


    public function AuthorJoinTable()
    {
        return $this->belongsTo(category::class);
    }
}
