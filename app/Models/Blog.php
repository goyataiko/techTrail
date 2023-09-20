<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'created_at',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
