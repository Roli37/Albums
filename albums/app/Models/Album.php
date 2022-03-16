<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";
    protected $fillable = ["title", "released", "genre", "tcc", "sales", "cover"];
    public $timestamps = false;
}
