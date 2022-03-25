<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $timestamps = false;
    protected $fillable = ['album_id', 'no', 'title', 'length'];
    public function Album()
    {
        return $this->belongsTo(Album::class);
    }
}
