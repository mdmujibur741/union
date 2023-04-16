<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Holding extends Model implements WithHeadingRow
{
    use HasFactory;

protected $fillable = ['name', 'spouse_name', 'gender',	'village', 'profession', 'id_no', 'holding_no',	'word_no', 'house_type','yearly_tax', 'opinion','type_id','user_id'];

    // relationship
    public function houseShopType()
    {
        return $this->belongsTo(HouseShopType::class, 'type_id');
    }

    public function holdingTax()
    {
        return $this->hasMany(HoldingTax::class,'holding_id');
    }
}
