<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentType;
use App\contactType;

class AdminController extends Controller
{
    /**
     * create documents type
     */

    public function DocumentType (Request $request){

        /**
         * validate
         */

//        $this->validate($request,[
//           "description" => 'require|description',
//           "name"        => 'require|name'
//        ]);


        /**
         * save to database
         */
        $documentsType = new DocumentType;

        $documentsType->description=$request->input('description');
        $documentsType->name=$request->input('name');

        $documentsType->save();

        return response()->json([
            'status'      => 'success',
            'message'     => 'saved'
        ]);
    }

    public function ContactsType (Request $request){

//        $this->validate($request,[
//            "contact_type" => 'require'
//        ]);

        $contactType= new contactType;

        $contactType->contact_type=$request->input('contact_type');

        $contactType->save();

        return response()->json([
            'status'      => 'success',
            'message'     => 'saved'
        ]);
    }
}
