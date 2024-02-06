<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seri extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
