@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card" style="padding:30px" >
            <div class="card-header">
                <h4 class="card-title">Edit Investment</h4>
                  <p class="card-category">You can make changes to investment below.</p>
                                
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                    
                @endif
                <form action="/updateinvest/{{$invest->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Investor Name</label>
                                <input type="text" name="name" class="form-control border-input" placeholder="Name" value="{{$invest->name}}" >
                                                         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Investor Amount</label>
                                <input type="text" name="amount" class="form-control border-input" placeholder="Name" value="{{$invest->amount}}" >
                                
                            </div>
                        </div>
                      </div>
                      <div class="row">
                    
                        
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Earnings</label>
                                <input type="text" name="earnings" class="form-control border-input" value="{{$invest->earnings}}" >
                    
                            </div>
                        </div>
                                         
    
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Maturity Date</label>
                                <input type="text" name="date" class="form-control border-input" value="{{$invest->maturity}}" />
                               
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" name="update" class="btn btn-success btn-fill btn-wd" >Update Investment</button>
                        
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</div>






    
@endsection