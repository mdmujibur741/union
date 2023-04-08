<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseShopType extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'title'];
}
