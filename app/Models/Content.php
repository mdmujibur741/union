<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'menu_id', 'content'];


    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }
}
