<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'description' => 'array',
        'image_url' => 'array',
    ];

    public function adsCategory()
    {
        return $this->belongsTo(AdsCategory::class);
    }
}