<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products;

use App\Models\Company;

use App\Models\Product_Types;

class ProductsController extends Controller
{

    public function create(){

        $companies = Company::all();

        $product_types = Product_Types::all();

        return view('products.create',compact('companies'),compact('product_types'));

    }


    public function store(Request $request){

     Products::create($request->all());

     return redirect()->route('products.index');

    }

    public function index(){

       $products = Products::select('products.id', 'products.name_products',
           'products.description', 'products.price','product_types.name_product_type','companies.name_company')
           ->join('product_types','products.product_type_id','=','product_types.id')
           ->join('companies','products.company_id','=','companies.id')->get();

       return view('products.index',compact('products'));


    }




}
