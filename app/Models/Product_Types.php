<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Types extends Model
{
    use HasFactory;

    protected  $table = 'product_types';


    protected $primaryKey = 'id';



    protected $fillable = [

        'name_product_type'

    ];
}
