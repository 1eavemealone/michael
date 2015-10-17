<?php
namespace App\Http\Controllers\Deskpad;

use App\Http\Controllers\Controller;
use App\Partner;
use App\Country;
use App\EntityType;
use Input;
use App\StudentInfo;
use App\Users;
class PartnerController extends Controller {

public function partners() {
        $student = StudentInfo::paginate(10);

        return view('deskpad/partners', compact('student'));
    }

public function CreateStudent() {


		$Student= new StudentInfo;
        $input = Input::except('_token');
        $Student->fill($input);
		$Student->save();

        return view('deskpad/partners',compact('user'))->with('message', 'Welcome');
	}

public function login(){

        $email = Input::get('email');
        $password = Input::get('password');

        $login = count(Users::where('email',$email)->where('password',$password)->first());

        if($login > 0){
            $user = Users::where('email',$email)->where('password',$password)->first();
            $user->status = 'Active';
            $user->save();

        return view('deskpad/partners',compact('user'))->with('message', 'Welcome');
        }
        else{
            return view('deskpad/baselogin')->with('message', 'Mismatch password and username! Please try again.');
        }

}

}
