<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\User;

class UserRegistration extends Controller
{
    /*
     * veryfy the email first
     */
    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();
        if($user== null){
            $user->verified = 1;
            if($user->save()){
                $id=$user->company_id;
                return 'id'.$id;
            }
        }else{
            return 2;
        }

    }

}
