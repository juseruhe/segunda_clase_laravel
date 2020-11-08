<?php

namespace App\Http\Controllers\Product_Types;

use App\Http\Controllers\Controller;
use App\Models\Product_Types;
use Illuminate\Http\Request;

class Product_Types_Controller extends Controller
{
    public  function  index(){

        $product_types = Product_Types::all();

        return view('product_types.index',compact('product_types'));


    }

    public  function  create(){



        return view('product_types.create');


    }

    public function store(Request $request){

         Product_Types::create($request->all());

        return redirect()->route('product_types.index');


    }

    public function  show($id){

        $product_type = Product_Types::find($id);

        return view('product_types.show',compact('product_type'));
    }

    public function  edit($id){

        $product_type = Product_Types::find($id);

        return view('product_types.edit',compact('product_type'));
    }

    public function  update(Request  $request ,$id) {

        $product_type = Product_Types::find($id)->update($request->all());

        return redirect()->route('product_types.index');

    }


    public function destroy($id){

    Product_Types::find($id)->delete();

        return redirect()->route('product_types.index');

    }

}
