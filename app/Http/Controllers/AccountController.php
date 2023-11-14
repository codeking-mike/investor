<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index(){
        
        $invesments = Investment::where('user_id', auth()->user()->id)->where("completed", "no")->get();
        if(!$invesments->isEmpty()){
        foreach ($invesments as $income){
         $curdate = Carbon::now();
         $invdate = Carbon::parse($income->created_at);
         $nofdays = $invdate->diffInDays($curdate);
         $sumprofit = '';
         if($curdate < $income->maturity){
            $sumprofit = $nofdays * $income->daily_profit;
            $income->profits = $sumprofit;
            $income->update();
        }else{

             $user = User::find($income->user_id);
             $user->balance = $user->balance + $income->earnings;
             $income->completed = 'yes';
             $user->update();
             $income->update();

        }
      }
    }
        return view("dashboard.index",[
            "title"=>"User Dashboard",
            "investments"=>Investment::where('user_id', auth()->user()->id)->where('completed', 'no')->count(),
            "sum"=>Investment::where('user_id', auth()->user()->id)->where("completed", "no")->sum('profits'),
            "depcnt"=>Deposit::where('user_id', auth()->user()->id)->where("confirmed", null)->count(),
            
        ]);
    }
    public function about(){
        return view("about",[
            "title"=>"Bonretours :: About Us"
        ]);
    }

    public function referal(){
        return view("referals.index",[
            "title"=>"Bonretours - Referal",
            "referals"=>User::where('referal_id', auth()->user()->id)->get(),
            "num"=>User::where('referal_id', auth()->user()->id)->count()
        ]);
    }

    public function contact(){
        return view("contact",[
            "title"=>"Bonretours :: Contact Us"
        ]);
    }

    public function register(){
        return view("register",[
            "title"=>"Bonretours :: Create Account"
        ]);
    }

    public function login(){
        return view("login",[
            "title"=>"Bonretours :: Account Login"
        ]);
    }


}
