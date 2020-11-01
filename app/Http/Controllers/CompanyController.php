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


}
