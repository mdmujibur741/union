<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable= ['sender_name',
    'receiver_name',
   'receiver_contact',
   'purpose',
   'amount',
   'amount_in_word',
   'date' ,
   'remark'];
}
