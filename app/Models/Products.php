<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

   protected $primaryKey = 'id';

   protected $table = 'products';

   protected $fillable = [

       'name_products','description','price','product_type_id','company_id'
   ];



}
