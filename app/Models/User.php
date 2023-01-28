<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class User extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function books()
    {
        // return $this->hasMany('App\Models\Book');
        return $this->hasMany(Book::class);
    }
}
