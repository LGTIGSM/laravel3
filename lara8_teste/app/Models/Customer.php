<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email'
    ];

    protected $table = 'customers';

    protected $dates = ['deleted_at'];

    public function address()
    {
        return $this->hasOne(Address::class, 'id_customer', 'id');
    }

    public function delete()
    {
        $this->address()->delete();

        return parent::delete();
    }
}
