<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";
    protected $fillable = ["title", "released", "genre", "tcc", "sales", "cover"];
    public $timestamps = false;
    public function Artist()
    {
        return $this->belongsTo(Artist::class);
    }
    public function Tracks()
    {
        return $this->hasMany(Track::class, 'album_id');
    }
}
