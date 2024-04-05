<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'address_1',
        'address_2',
        'country',
        'state',
        'city',
        'pincode',
        'description',
        'rent',
        'image',
        'user_id',
        'lattitude',
        'longitude',
    ];
}
