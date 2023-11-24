<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deposit;
use App\Models\Support;
use App\Models\Investment;
use App\Models\Withdrawals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view("admin.index",[
            "title"=>"Bonretours :: Account History",
            "invest"=>Investment::where('completed', 'no')->count(),
            "dep"=>Deposit::where("confirmed", null)->count(),
            "users"=>User::where("role", 'user')->count(),
            "withdraws"=>Withdrawals::where('completed', 'no')->where('type', 'invest')->count(),
            "bonus"=>Withdrawals::where('completed', 'no')->where('type', 'bonus')->count(),
            "msg"=>Support::where('receiver', 'admin')->count(),
            "sum"=>Investment::where("completed", "no")->sum('amount'),
            "with"=>Withdrawals::where('completed', 'no')->sum('amount')

        ]);
    }

    public function users() {
        return view("admin.users",[
            "title"=>"Bonretours :: Site Users",
            "users"=>User::where("role", 'user')->get()

        ]);
    }

    public function edituser($id) {
        $user = User::find($id);
        return view("admin.edituser",[
            "title"=>"Bonretours :: Edit User",
            "user"=>$user

        ]);
    }

    
    
    public function notification(){
        return view("history.notify",[
            "title"=>"Bonretours :: Account Notification",
            'support'=> Support::where('receiver', 'all')->orderBy('created_at','desc')->get()
        ]);
    }

    public function support(){
        return view("history.create ",[
            "title"=>"Bonretours :: Account Support"
        ]);
    }

    public function updateuser(Request $request, $id) {

        $user = User::find($id);
        $user->firstname = $request->input('fname');
        $user->lastname = $request->input('lname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->momo_name = $request->input('momoname');
        $user->momo_no = $request->input('momono');
        $user->momo_network = $request->input('network');
        $user->balance = $request->input('balance');
        $user->bonus = $request->input('bonus');
        $user->country = $request->input('country');
        $user->save();

        return back()->with('success', 'User details updated successfully');

    }

    public function delete($id){
       $user = User::find($id);
       if($user){
          $user->delete();
          return back()->with('success', 'User Deleted!');
       }else{
        return back()->with('error', 'User not found!');
       }
    }

    public function switchuser($id) {
        $user = User::find($id);
        auth()->login($user);

        return redirect('/account');
    }

    public function deposit(){
        return view("admin.deposit ",[
            "title"=>"Bonretours :: Admin Deposit",
            "deposits"=>Deposit::where("confirmed", null)->get(),
            
        ]);
    }

    public function deletedeposit($id){
        $deps = Deposit::find($id);
        if($deps){
           $deps->delete();
           return back()->with('success', 'User Deleted!');
        }else{
         return back()->with('error', 'User not found!');
        }
     }

     public function viewpop($id){
        $deps = Deposit::find($id);
        return view("admin.viewpop",[
            "title"=>"Bonretours :: Admin Deposit",
            "deposit"=>$deps
            
        ]);
    }

    public function confirm($id){
        $deps = Deposit::find($id);
        $user = User::find($deps->user_id);
        $user->balance = $user->balance + $deps->amount;
        $deps->confirmed = 'yes';
        $deps->save();
        $user->save();
        
        return redirect('/admin/deposit')->with('success', 'Deposit Confirmed!');
    }

    public function invest(){
        return view("admin.invest",[
            "title"=>"Bonretours :: Active Investments",
            "investments"=>Investment::where('completed', 'no')->get()
            
        ]);
    }

    public function viewinvest($id){
        $invest = Investment::find($id);
        return view("admin.viewinvest",[
            "title"=>"Bonretours :: Admin Deposit",
            "invest"=>$invest
            
        ]);
    }


    public function updateinvest(Request $request, $id) {

        $invest = Investment::find($id);
        $invest->amount = $request->input('amount');
        $invest->earnings = $request->input('earnings');
        $invest->maturity = $request->input('date');
        $invest->save();

        return redirect('/admin/invest')->with('success', 'Investment details updated successfully');

    }

    public function deleteinvest($id){
        $inv = Investment::find($id);
        if($inv){
           $inv->delete();
           return back()->with('success', 'Investment Deleted!');
        }else{
         return back()->with('error', 'Investment not found!');
     }
    }


     public function withdrawal(){
       
        return view("admin.withdrawal",[
            "title"=>"Bonretours :: Withdrawals",
            "withdrawals"=>Withdrawals::where('type', 'invest')->where('completed', 'no')->orderBy('created_at', 'desc')->get()
            
        ]);
    }


    public function viewwithdrawal($id){
        $with = Withdrawals::find($id);
        $user = User::find($with->user_id);
        return view("admin.viewwithdrawal",[
            "title"=>"Bonretours :: Withdrawals",
            "with"=>$with,
            'user'=>$user
            
        ]);
    }
    
    public function complete($id){

        $with = Withdrawals::find($id);
        $with->completed = 'yes';
        $with->save();

        return redirect('/admin/withdrawal')->with('success', 'Payout completed successfully');

        
    }


    public function bonus(){
       
        return view("admin.bonus",[
            "title"=>"Bonretours :: Withdrawals",
            "withdrawals"=>Withdrawals::where('type', 'bonus')->where('completed', 'no')->orderBy('created_at', 'desc')->get()
            
        ]);
    }


    public function viewbonus($id){
        $with = Withdrawals::find($id);
        $user = User::find($with->user_id);
        return view("admin.viewbonus",[
            "title"=>"Bonretours :: Withdrawals",
            "with"=>$with,
            'user'=>$user
            
        ]);
    }
    
    public function completebonus($id){
        
        $with = Withdrawals::find($id);
        $with->completed = 'yes';
        $with->save();

        return redirect('/admin/bonus')->with('success', 'Payout completed successfully');

        
    }


 

}
