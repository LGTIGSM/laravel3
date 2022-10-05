<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'city',
        'state',
        'number',
        'complement'
    ];

    protected $dates = ['deleted_at'];

    protected $table = 'addresses';
}
