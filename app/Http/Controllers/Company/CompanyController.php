<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    public  function  index(){

        $companies = Company::all();

        return view('company.index',compact('companies'));
    }


    public  function create(){
        return view ('company.create');
    }

    public  function store(Request $request){
        Company::create($request->all());
        return redirect()->route('company.index');
    }

public  function  destroy($id){

        Company::find($id)->delete();

        return redirect()->route('company.index');
}

public function  show($id){

     $company =   Company::find($id);

     return view('company.show',compact('company'));


}

    public function  edit($id){

        $company =   Company::find($id);

        return view('company.edit',compact('company'));


    }

public  function update(Request  $request ,$id){

        $company = Company::find($id);

        $company->name =$request->input("name");
        $company->NIT =$request->input("NIT");
        $company->address = $request->input("address");

        $company->update();

        return redirect()->route('company.index');

}



}
