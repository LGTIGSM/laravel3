<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $incrementing  = true;

    protected $table = 'customers';

    public function address()
    {
        return $this->hasOne(Address::class, 'id_customer', 'id');
    }
}
