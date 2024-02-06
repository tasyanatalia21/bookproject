<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function series()
    {
        return $this->hasMany(Seri::class);
    }

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
