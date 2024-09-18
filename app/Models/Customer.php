<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    use HasUlids;
    public $timestemps = false;
    protected $guarded = [];    

    // for primary key column name change
    protected $primaryKey = "customer_id";

    public $incrementing = false;

    protected $keyType = 'string';

    // for default attributes values
    // protected $attributes = [
            // 'city' => 'City_name'
    // ];

}
