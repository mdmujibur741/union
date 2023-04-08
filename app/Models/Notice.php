<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;



    protected $fillable = ['type_id', 'headline', 'details', 'image', 'sequence','status'];



    public function noticeType()
    {
         return $this->belongsTo(NoticeType::class, 'type_id');
    }
}
