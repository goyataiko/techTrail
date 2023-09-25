<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    public function limited_blogs()
    {
        return $this->blogs->slice(0, 1);
    }
}
