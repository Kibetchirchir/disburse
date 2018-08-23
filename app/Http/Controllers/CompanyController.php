<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function register(Request $request){

         $this->validate($request,[
          'companyName' => 'required',
           'PhysicalAdress' => 'required',
           'postalAdress' => 'required',
           'GPS' => 'required',
            'phone' => 'required',
             'KRA' => 'required',
             'category' => 'required'
         ]);

         //create new company

        $company=new Company;
        $company->companyName =$request->input('companyName');
        $company->PhysicallAdress=$request->input('PhysicalAdress');
        $company->PostallAdress=$request->input('postalAdress');
        $company->GPS=$request->input('GPS');
        $company->phone=$request->input('phone');
        $company->KRA=$request->input('KRA');
        $company->category=$request->input('category');

        //save the company
        $company->save();

        //redirect

        return redirect('/')->with('status' , 'company created');
    }
}
