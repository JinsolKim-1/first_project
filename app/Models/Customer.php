<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    public $timestamps = false;

    protected $table = 'customers_table';

    protected $primaryKey = 'customers_id';

    protected $fillable = [
        'customers_name',
        'customer_address'
    ];
}