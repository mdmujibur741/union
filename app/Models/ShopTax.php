<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopTax extends Model
{
    use HasFactory;

    protected $fillable = ['year_id','tax', 'shop_id','user_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
