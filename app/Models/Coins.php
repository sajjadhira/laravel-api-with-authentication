<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coins extends Model
{
    use HasFactory;
    protected $tabble = 'coins';
    protected $fillable = [
        'type',
        'name',
        'symbol',
        'chain',
        'address',
        'market_cap',
        'price',
        'launch_date',
        'description',
        'telegram',
        'logo_url',
        'contact_email',
        'contact_telegram',
    ];
}
