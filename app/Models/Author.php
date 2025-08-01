<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
  use HasFactory;

    protected $fillable = ['name'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
