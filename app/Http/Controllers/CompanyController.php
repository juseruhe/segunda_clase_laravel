<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){



        $companies = Company::all();
        return view('company.index',compact('companies'));
    }

    public function create(){

        return view('company.create');
    }

    public function store(Request $request){
     Company::create($request->all());
     return redirect()->route('company.index');
    }

    public function destroy($id){
        Company::find($id)->delete();
        return redirect()->route('company.index');
    }

    public function  show($id){

        $company = Company::find($id);

        return view('company.detalles',compact('company'));

    }

    public function  look($id){

        $company = Company::find($id);

        return view('company.modificar',compact('company'));

    }

    public function put(Request $request,$id){

   $company = Company::find($id);

   $company->name= $request->input("name");
   $company->NIT= $request->input("NIT");
   $company->address= $request->input("address");
   $company->created_at= $request->input("created_at");

   $company->update();

   return redirect()->route('company.index');

    }



}
