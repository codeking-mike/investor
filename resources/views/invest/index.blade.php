@extends('accountlayout')

@section('content')

<div class="content">


    <div class="row">
        <div class="container-fluid">
             <div class="row mt-3">
            

    
              

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
                
            

             </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="">

          <div class="card-header ">
            <h4 class="card-title d-inline">Investment Package</h4>
            <p class="card-text">Choose your preferred Investment plan an start earning</p>
            @if (session()->has('success'))
              
            <p class="text-success">{{session('success')}}</p>
            @endif
            @if (session()->has('error'))
            
            <p class="text-warning">{{session('error')}}</p>
            @endif
            
          </div>
          <div class="card-body">
            
                    <div class="card">
                        <div class="card-header bg-warning ">
                         <h4 class="card-title  text-white">Beginner Plan</h4>
                     
                        </div>
                      
                        <div class="card-body">
                            <p class="text-white p-3">Min. Investment: 10,000 cfa <br/>
                                Max. Investment: 5,000,000 cfa<br/>
                                ROI: Earn 40% in 8 days
                              </p>
                            <form action="/invest/begin" method="post">
                                @csrf
                                <h4 class="card-title">How much would you like to invest?</h4>
                                
                                <div class="form-group">
                                    <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount" >
                                    <input type="hidden" name="user_id"  class="form-control" value="{{auth()->user()->id}}" >
                            
                                </div>
    
                                <div class="form-group">
                                    <button type="submit" name="fund" class="btn btn-fill btn-warning">Invest</button>
                                </div>
                                
                            </form>
    
                          </div>
                        
                    </div>

                    <div class="card">
                        <div class="card-header bg-success ">
                         <h4 class="card-title  text-white">Premium Plan</h4>
                     
                        </div>
                        
                        
                        <div class="card-body">
                            <p class="text-white p-3">Min. Investment: 10,000 cfa <br/>
                                Max. Investment: 10,000,000 cfa<br/>
                                ROI: Earn 70% in 14 days
                              </p>
                            <form action="/invest/prem" method="post">
                                @csrf
                                <h4 class="card-title">How much would you like to invest?</h4>
                                
                                <div class="form-group">
                                    <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount" >
                                    <input type="hidden" name="user_id"  class="form-control" value="{{auth()->user()->id}}" >
                            
                                </div>
    
                                <div class="form-group">
                                    <button type="submit" name="fund" class="btn btn-fill btn-success">Invest</button>
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



