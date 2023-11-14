<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view("index",[
            "title"=>"Bonretours :: Online Trading Platform"
        ]);
    }
    public function about(){
        return view("about",[
            "title"=>"Bonretours :: About Us"
        ]);
    }
    public function contact(){
        return view("contact",[
            "title"=>"Bonretours :: Contact Us"
        ]);
    }

    public function register(Request $request){
        $ref = $request->input("ref");
        return view("register",[
            "title"=>"Bonretours :: Create Account",
            "ref"=>$ref
        ]);
    }

    public function login(){
        return view("login",[
            "title"=>"Bonretours :: Account Login"
        ]);
    }

    public function create(Request $request){
        $formFields = $request->validate([
            'firstname'=> ['required', 'min:3' ],
            'lastname'=> ['required', 'min:3' ],
            'referal_id'=> ['nullable'],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'phone'=> ['string', 'min:11', 'nullable' ],
            'level'=>['string', 'nullable'],
            'role'=>['string', 'nullable'],
            'password'=>['required', 'min:4']    
            
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);
        

        //create user 
        $user = User::create($formFields);

        //login user automatically
       auth()->login($user);

        return redirect('/complete');

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=> ['required', 'email'],
            'password'=>['required', 'min:4']
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            
            $num = User::where('referal_id','=', auth()->user()->id)->count();
            $user = User::find(auth()->user()->id);

            if($num >= 8 && $num < 18 ){
                  $user->level = 2;

            }elseif($num >= 18 && $num < 30){
                $user->level = 3;
            }elseif($num >= 30){
                $user->level = 4;
            }else{
                $user->level = 1;  
            }
            $user->save();
            return redirect('/account');
        }

        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');

    }


   

}
