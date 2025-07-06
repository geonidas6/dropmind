<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MindDrop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'message', 'mood_id', 'lat', 'lng', 'image_path', 'token_id',
    ];

    public function mood()
    {
        return $this->belongsTo(Mood::class);
    }

    public function token()
    {
        return $this->belongsTo(UserToken::class, 'token_id');
    }
}
