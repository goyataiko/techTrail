<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id');
    }

    public function limited_portfolios()
    {
        return $this->portfolios->slice(0, 3);
    }
}
