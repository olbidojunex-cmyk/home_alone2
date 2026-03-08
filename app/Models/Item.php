<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_name',
        'item_serialno',
        'item_quantity',
        'date_issued',
        'date_received',
        'item_status',
        
    ];
}