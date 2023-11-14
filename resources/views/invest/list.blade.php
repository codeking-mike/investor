@extends('accountlayout')

@section('content')

<div class="content">

    <div class="row mb-1">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
          <h4 class="font-weight-bold text-white">Hi, {{auth()->user()->firstname}}</h4>
          <p class="font-weight-normal mb-2 text-muted">
            @php
                $date = date("Y-m-d H:i:s"); 
            @endphp
            {{$date}}<br/>
            <span class="text-white"><strong>Account Level: </strong>{{auth()->user()->level}}</span></p>
          </div>
          </div>
       </div>
    </div>

    
    <div class="row">
      <div class="col-md-12">
        <div class="card card-tasks" style="">

          <div class="card-header ">
            <h4 class="title d-inline">Active Investments</h4>
            <p class="card-text">View all your active Investments below. 
            
          </div>
          <div class="card-body ">
            @if (session()->has('message'))
              
            <p class="text-success">{{session('message')}}</p>
            @endif
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                    @foreach($invest as $inv)
                  <tr>
                    <div class="row mt-3">
            

    
              

                        <div class="col-md-12">
                            <div class="card" style="color:#fff !important;text-align:center">
                                <div class="card-header">
                                  <i class="tim-icons icon-bank"></i>
                                    <h4 class="card-title">Amount Invested</h4>
                                   
                                    
                                      <h2 class="card-title"><strong>{{$inv->amount}} </strong></h2>
                                      <p class="card-text"><b>Maturity Date:</b>{{$inv->maturity}}</p>
                                     
                                     
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                          <div class="col">
                                            <h5 class="card-title">Daily Profit</h5>
                                            <h6> 
                                              
                                              <strong>{{$inv->profits}} </strong>
                                             
                                            </h6>
                                          </div>
                                          <div class="col">
                                            <h5 class="card-title">Expected Earnings</h5>
                                            <strong>{{$inv->earnings}} </strong>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="/withdraw/invest/{{$inv->id}}" class="btn btn-success btn-lg">Withdraw to Wallet</a>
                                            
                                            </div>
                                        </div>
                                      </div>
                                </div>
                               
                            </div>
                        </div>
                        
                    
        
                     </div>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

</div>
@endsection



