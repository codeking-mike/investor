<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    //

    public function create(){
        return view("deposit.create",[
            "title"=>"Bonretours :: Fund Account"
        ]);
    }

    public function store(Request $request, Deposit $deposit){
        $formFields = $request->validate([
            'amount'=> ['required','numeric'],
            'user_id'=> ['nullable']
        ]);

       
       $deposit->amount = $formFields['amount'];
       $deposit->user_id = $formFields['user_id'];
       $deposit->save();
       $lastInsertId = $deposit->id;
    

       return redirect()->route('payment', ['id' => $lastInsertId]);

    }

    public function payment($id){
        $deposit = Deposit::find($id);
        return view("deposit.payment",[
            "title"=>"Bonretours :: Fund Account",
            "accounts"=>Account::where('active','yes')->get(),
            "dep"=> $deposit
            
        ]);
    }

    public function list(){
        return view("deposit.list",[
            "title"=>"Bonretours :: Fund Account",
            "deposits"=>Deposit::where('user_id', auth()->user()->id)->where("confirmed", null)->get()
            
        ]);
    }

    public function update(Request $request, $id){
        $deposit = Deposit::find($id);
        $formFields = $request->all();

        if($request->hasFile('pop')){
            $formFields['pop'] = $request->file('pop')->store('userimages', 'public');
            $deposit->pop = $formFields['pop'];
            $deposit->update();

            return redirect('/deposit')->with('message', 'Proof of payment uploaded. Kindly hold on while we confirm payment!');
            
        }else{
            
            return back()->with('error','Upload your proof of payment!');


        }

        
    }

    public function delete($id){
        Deposit::where('id', $id)->delete();

        return back()->with('message', 'Deleted Successfully!');
    }

    

}
