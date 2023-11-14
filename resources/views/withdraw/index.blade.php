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
            <p class="card-text">Withdraw to your mobile wallet.  </p>
            @if (session()->has('success'))
              
            <p class="text-success">{{session('success')}}</p>
            @endif
            @if (session()->has('error'))
            
            <p class="text-warning">{{session('error')}}</p>
            @endif
            
          </div>
          <div class="card-body">
            
                    <div class="card">
                        
                      
                        <div class="card-body">
                            
                            <form action="/withdraw" method="post">
                                @csrf
                                <h4 class="card-title">Enter withdrawal amount</h4>
                                
                                <div class="form-group">
                                    <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount" >
                                    <input type="hidden" name="user_id"  class="form-control" value="{{auth()->user()->id}}" >
                            
                                </div>
    
                                <div class="form-group">
                                    <button type="submit" name="fund" class="btn btn-fill btn-warning">Withdraw</button>
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



