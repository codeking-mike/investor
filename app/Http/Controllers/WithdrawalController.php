<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\History;
use App\Models\Investment;
use App\Models\Withdrawals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WithdrawalController extends Controller
{
    public function index(){
        return view("withdraw.index",[
            "title"=>"Bonretours :: Withdrawals"
        ]);
    }

    public function create(Request $request, Withdrawals $with, History $history){
        $formFields = $request->validate([
            'amount'=> ['required', 'numeric' ],
            'user_id'=> ['required']
            
        ]);

        if($request->amount > auth()->user()->balance ){

            return back()->with('error','You have Insufficient funds in your account!');
         }else{

              $with->user_id = auth()->user()->id;
              $with->amount = $request->amount;
              $with->type = 'invest';
              $with->completed = 'no';
              $with->name =  auth()->user()->firstname. " ".auth()->user()->lastname;
              $with->save();
              $user = User::find(auth()->user()->id);
              $user->balance = $user->balance - $request->amount;
              $user->update();

              $history->user_id = auth()->user()->id;
        $history->description = 'Made a Withdrawal of '. $formFields['amount'];
        $history->save();

              return back()->with('success','Withdrawal successful. Kindly wait for payment in your account');


         }
    }

    public function bonus(Withdrawals $with, History $history){
        
        $inv = Investment::where('user_id', auth()->user()->id)->count();
        if($inv === 0){

            return back()->with('error','You have not made any investment yet. Kindly make an investment');
                

        }else{
                if(auth()->user()->bonus < 25000 ){

                    return back()->with('error','You have Insufficient funds in your bonus account! Minimum Bonus withdrawal amount is 25,000');
                
                }else{

                    $with->user_id = auth()->user()->id;
                    $with->amount = auth()->user()->bonus;
                    $with->type = 'bonus';
                    $with->completed = 'no';
                    $with->name =  auth()->user()->firstname. " ".auth()->user()->lastname;
                    $with->save();
                    $user = User::find(auth()->user()->id);
                    $user->bonus = 0.00;
                    $user->update();

                    $history->user_id = auth()->user()->id;
                    $history->description = 'Made a Bonus Withdrawal of '.auth()->user()->bonus;
                    $history->save();
                    return back()->with('success','Withdrawal successful. Kindly wait for payment in your account');


                }
            }

        }
}
