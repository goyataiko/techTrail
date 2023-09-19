<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'tool',
        'work_detail',
        'site_link',
        'plan_link',
        'description',
        'created_at',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
