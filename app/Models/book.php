<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'genre_id',
        'seri_id',
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];

    public function Author()
    {
        return $this->belongsTo(Author::class);
    }

    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function Seri()
    {
        return $this->belongsTo(Seri::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
