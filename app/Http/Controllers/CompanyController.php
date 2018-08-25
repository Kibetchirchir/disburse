<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\ContactPerson;
use App\ShareHolder;
use  Illuminate\Support\Facades\Input;

class CompanyController extends Controller
{

    /*
     *
     *company registration
     */
    public function register(Request $request){

         $this->validate($request,[
          'companyName' => 'required',
           'PhysicalAdress' => 'required',
           'postalAdress' => 'required',
           'GPS' => 'required',
            'phone' => 'required',
             'KRA' => 'required',
             'category' => 'required',
             'ContactName'=>'required',
             'ContactEmail'=>'required'
         ]);
         /*
          * upload
          */

         /*
          * todo documents upload here
          */
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
        //retrieve the key
        $key=$company->id;
        //save the contact person

        $contact=new ContactPerson;

        $contact->name=$request->input('ContactName');
        $contact->email=$request->input('ContactEmail');
        $contact->phone=$request->input('ContactPhone');
        $contact->company_id=$key;

        //save
        $contact->save();
        //redirect

        return view('shareholdersregistration',
            ['id' => $key,
            'status' =>'company created your key is '.$key]);
    }
    /*
     * shareholders information
     */
    public function shareholder (Request $request,$id){
      /*
       * validating the shareholders form
       */
        $this->validate($request,[
            'IdNo' => 'required',
            'Name' => 'required',
            'KRA' => 'required'
        ]);


        /*
         * create new shareholder
         */
        $shareholder=new ShareHolder;
        $shareholder->name=$request->input('Name');
        $shareholder->IdNo=$request->input('IdNo');
        $shareholder->KRA=$request->input('KRA');
        $shareholder->company_id=$id;

        /*
         * save the shareholder
         */
        $shareholder->save();
        /*
         * redirect
         */
        return redirect('/')->with('status','shareholder information updated');

    }
}
