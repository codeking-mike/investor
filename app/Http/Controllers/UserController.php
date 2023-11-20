<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index(){
        return view("dashboard.profile",[
            "title"=>"Bonretours :: Edit Account Details"
        ]);
    }

    public function show(){
        return view("dashboard.show",[
            "title"=>"Bonretours :: Complete Account"
        ]);
    }


    public function update(Request $request, $id, History $history){
        $user = User::find($id);
        $formFields = $request->validate([
            'firstname'=> ['required', 'min:3' ],
            'lastname'=> ['required', 'min:3' ],
            'momo_name'=> ['string','nullable'],
            'momo_no'=> ['string','nullable'],
            'momo_network'=> ['string','nullable'],
            'country'=> ['string','nullable'],
            'email'=> ['required', 'email'],
            'phone'=> ['string', 'nullable']   
            
        ]);
        $user->firstname = $formFields['firstname'];
        $user->lastname = $formFields['lastname'];
        $user->email = $formFields['email'];
        $user->phone = $formFields['phone'];
        $user->momo_name = $formFields['momo_name'];
        $user->momo_no = $formFields['momo_no'];
        $user->momo_network = $formFields['momo_network'];
        $user->country = $formFields['country'];

        $user->update();

        $history->user_id = auth()->user()->id;
        $history->description = ' Profile updated successfully ';
        $history->save();

        return back()->with('success','Profile updated successfully');
    }

    public function complete(Request $request, $id,  History $history){
        $user = User::find($id);
        $formFields = $request->validate([
            
            'momo_name'=> ['string','nullable'],
            'momo_no'=> ['string','nullable'],
            'momo_network'=> ['string','nullable'],
            'country'=> ['string','nullable']
            
        ]);
        $user->momo_name = $formFields['momo_name'];
        $user->momo_no = $formFields['momo_no'];
        $user->momo_network = $formFields['momo_network'];
        $user->country = $formFields['country'];

        $user->update();

        $history->user_id = auth()->user()->id;
        $history->description = ' Profile updated successfully ';
        $history->save();
        
        return redirect('/account')->with('success','Profile updated successfully');
    }
}
