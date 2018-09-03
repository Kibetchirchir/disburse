<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\ContactPerson;
use App\ShareHolder;
use App\User;
use App\Jobs\SendVerificationEmail;
use App\Jobs\SendManagerEmail;

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
             'ContactEmail'=>'required',
             'ManagerEmail'=>'required'
         ]);
         /*
          * upload
          */

         /*
          * todo documents upload here
          *
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
        $company->email=$request->input('ManagerEmail');

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

        /*
         * manager
         */
        $email=$request->input('ManagerEmail');
        /*
         * manager password random
         */
        $rand = substr(md5(microtime()),rand(0,26),5);

        $user=new User;
        $user->name=$request->input('ManagerName');
        $user->email=$request->input('ManagerEmail');
        $user->password=bcrypt($rand);
        $user->role='manager';
        $user->email_token=base64_encode($email);
        $user->company_id=$key;

        $user->save();

        /*
         * send email
         */

        dispatch(new SendManagerEmail($user));


        return redirect('/company')->with('status','account created once the account is created youll receive a notification');
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
        return redirect('/')->with('status','account created once the account is created youll receive a notification');

    }

}
