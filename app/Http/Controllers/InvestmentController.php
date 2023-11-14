<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Account;
use App\Models\Deposit;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InvestmentController extends Controller
{
    public function index(){
        return view("invest.index",[
            "title"=>"Bonretours :: Invet"
        ]);
    }

    public function prem(Request $request, Investment $investment){
        $formFields = $request->validate([
            'amount'=> ['required','numeric'],
            'user_id'=> ['nullable']
        ]);

        $inv = Investment::where('user_id', auth()->user()->id)->count();
        
       
       $profit = $formFields['amount'] * 0.7;
       $dprofit = $profit/14;
       $earnings = $profit + $formFields['amount'];
       $curdate = Carbon::now();
       $maturity = $curdate->addDays(14);
       if($formFields['amount'] > auth()->user()->balance){
        return back()->with('error','Insufficient funds to invest!');
       }else{

        if($inv === 0){

        $investment->amount = $formFields['amount'];
        $investment->user_id = $formFields['user_id'];
        $investment->daily_profit = $dprofit;
        $investment->profits = $dprofit;
        $investment->earnings = $earnings;
        $investment->maturity = $maturity;
        $investment->completed = 'no';
        $investment->save();

        $user = User::find(auth()->user()->id);
        $user->balance = $user->balance - $formFields['amount'];

        $referer = User::find(auth()->user()->referal_id);
         if($referer->level == 1){
            
            $bonus = 0.08 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();

         }elseif($referer->level == 2){
            $bonus = 0.12 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();
         }elseif($referer->level == 3){
            $bonus = 0.16 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();
         }
         else{
            $bonus = 0.2 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();
         }
     
        $user->update();

    }else{

        $investment->amount = $formFields['amount'];
        $investment->user_id = $formFields['user_id'];
        $investment->daily_profit = $dprofit;
        $investment->profits = $dprofit;
        $investment->earnings = $earnings;
        $investment->maturity = $maturity;
        $investment->completed = 'no';
        $investment->save();

        $user = User::find(auth()->user()->id);
        $user->balance = $user->balance - $formFields['amount'];
        $user->update();

    }

        return back()->with('success','Congratulations! Your Investment was successful !');

       }
    

    }

    public function begin(Request $request, Investment $investment){
        $formFields = $request->validate([
            'amount'=> ['required','numeric'],
            'user_id'=> ['nullable']
        ]);

        $inv = Investment::where('user_id', auth()->user()->id)->count();


        $profit = $formFields['amount'] * 0.4;
        $dprofit = $profit/8;
        $earnings = $profit + $formFields['amount'];
        $curdate = Carbon::now();
        $maturity = $curdate->addDays(8);
        $bonus = "";

        if($formFields['amount'] > auth()->user()->balance){
         return back()->with('error','Insufficient funds to invest!');
        }else{

        if($inv === 0){
         
        $investment->amount = $formFields['amount'];
        $investment->user_id = $formFields['user_id'];
        $investment->daily_profit = $dprofit;
        $investment->profits = $dprofit;
        $investment->earnings = $earnings;
        $investment->maturity = $maturity;
        $investment->completed = 'no';
        $investment->save();
 
         $user = User::find(auth()->user()->id);
         $user->balance = $user->balance - $formFields['amount'];

         $referer = User::find(auth()->user()->referal_id);
         if($referer->level == 1){
            
            $bonus = 0.08 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();

         }elseif($referer->level == 2){
            $bonus = 0.12 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();
         }elseif($referer->level == 3){
            $bonus = 0.16 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();
         }
         else{
            $bonus = 0.2 * $formFields['amount'];
            $referer->bonus =  $referer->bonus + $bonus;
            $referer->save();
         }
         $user->update();

        


        }else{
          
            $investment->amount = $formFields['amount'];
            $investment->user_id = $formFields['user_id'];
            $investment->daily_profit = $dprofit;
            $investment->profits = $dprofit;
            $investment->earnings = $earnings;
            $investment->maturity = $maturity;
            $investment->completed = 'no';
            $investment->save();
     
             $user = User::find(auth()->user()->id);
             $user->balance = $user->balance - $formFields['amount'];
             $user->update();


        }
         
 
         return back()->with('success','Congratulations! Your Investment was successful');
 

    }
  }

  public function list(){
    return view("invest.list",[
        "title"=>"Bonretours :: Active Investments",
        "invest"=>Investment::where('user_id', auth()->user()->id)->where("completed", "no")->get()
        
    ]);
}

}
