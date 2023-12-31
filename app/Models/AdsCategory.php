<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ads()
    {
        return $this->hasMany(Ads::class);
    }
}