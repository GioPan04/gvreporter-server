<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail_url',
        'publish_at'
    ];

    protected $table = 'articles';

    public function author() {
        return $this->belongsTo(User::class);
    }
}
