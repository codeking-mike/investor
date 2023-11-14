@extends('accountlayout')

@section('content')

<div class="content">

    

    <div class="row mb-1">
        <div class="container-fluid">
             <div class="row mt-3">
            
        
              @if (session()->has('message'))
              
              <p class="text-success">{{session('message')}}</p>
              @endif
              @if (session()->has('error'))
              
              <p class="text-warning">{{session('error')}}</p>
              @endif

                <div class="col-md-12">
                    <div class="card" style="color:#fff !important;text-align:center">
                        <div class="card-header">
                          <i class="tim-icons icon-bank"></i>
                            <h4 class="card-title">Total Balance(CFA)</h4>
                           
                              @if (auth()->user()->balance == '')
                              <h2 class="card-title"><strong>0.00 </strong></h2>
                              @else  
                              <h2 class="card-title"><strong>{{auth()->user()->balance}}</strong></h2>
                              @endif
                              
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3>Fund Your Account</h3>
                        <p>Deposit money into your account to start investing. After payment make sure to upload a proof of payment for 
                            confirmation
                        </p>
                        
                           
                      </div>
                      <div class="card-body">
                        <form action="/deposit" method="post">
                            @csrf
                            <h4 class="card-category">Deposit Amount</h4>
                            
                            <div class="form-group">
                                <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount" >
                                <input type="hidden" name="user_id"  class="form-control" value="{{auth()->user()->id}}" >
                        
                            </div>

                            <div class="form-group">
                                <button type="submit" name="fund" class="btn btn-fill btn-success">Continue</button>
                            </div>
                            
                        </form>

                      </div>
                    </div>
                </div>
                
                

             </div>
        </div>
    </div>
    

</div>
@endsection
