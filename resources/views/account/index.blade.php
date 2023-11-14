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
                    <div class="card">
                      <div class="card-header">
                        <h3>Profile Incomplete!</h3>
                        <p>To complete your account creation, kindly add a withdrawal method
                        </p>
                        
                           
                      </div>
                      <div class="card-body">
                        <form action="/account" method="post">
                            @csrf
                            <h4 class="card-category">Account Details</h4>
                            
                            <div class="form-group">
                                <select name="country" class="form-control">
                                        <option>Country of Residence</option>
                                        <option>Cameroon</option>
                                </select>
                                
                                <input type="hidden" name="user_id"  class="form-control" value="{{auth()->user()->id}}" >
                        
                            </div>
                            <div class="form-group">
                                <input type="text" name="mmname" class="form-control" placeholder="Momo Name" >
                            </div>
                            <div class="form-group">
                                <input type="text" name="mmno" class="form-control" placeholder="Momo Number" >
                            </div>
                            <div class="form-group">
                                <input type="text" name="network" class="form-control" placeholder="Network" >
                            </div>


                            <div class="form-group">
                                <button type="submit" name="add" class="btn btn-fill btn-success">Update</button>
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
