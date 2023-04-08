<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoldingTax extends Model
{
    use HasFactory;

    protected $fillable = ['year_id','tax', 'holding_id','user_id'];


    public function holding()
    {
        return $this->belongsTo(Holding::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
