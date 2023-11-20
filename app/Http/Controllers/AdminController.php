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
}
