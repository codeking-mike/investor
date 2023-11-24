@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card" style="padding:30px" >
            <div class="card-header">
                <h4 class="card-title">Edit User Details</h4>
                  <p class="card-category">You can make changes to the user details below.</p>
                                
            </div>
            <div class="card-body">
                @if (session_)
                    
                @endif
                <form action="/updateuser/{{$user->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" name="fname" class="form-control border-input" placeholder="Name" value="{{$user->firstname}}" >
                                                         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" name="lname" class="form-control border-input" placeholder="Name" value="{{$user->lastname}}" >
                                
                            </div>
                        </div>
                      </div>
                      <div class="row">
                    
                        
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control border-input" placeholder="Email" value="{{$user->email}}" >
                    
                            </div>
                        </div>
                                         
    
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" name="phone" class="form-control border-input" value="{{$user->phone}}" />
                               
                            </div>
                        </div>
                        
                                        </div>
                      <div class="row">
                      <div class="col-md-7">
                            <div class="form-group">
                                <label>Country of Residence</label>
                                <input type="text" name="country" class="form-control border-input"  value="{{$user->country}}" >
                    
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                              <div class="form-group">
                                  <label>Momo Name</label>
                                  <input type="text" name="momoname" class="form-control border-input" value="{{$user->momo_name}}" >
                      
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                  <div class="form-group">
                                      <label>Momo Number</label>
                                      <input type="text" name="momono" class="form-control border-input"  value="{{$user->momo_no}}" >
                          
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                      <div class="form-group">
                                          <label>Momo Network</label>
                                          <input type="text" name="network" class="form-control border-input" value="{{$user->momo_network}}" >
                              
                                      </div>
                                  </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-7">
                                          <div class="form-group">
                                              <label>Account Balance</label>
                                              <input type="text" name="balance" class="form-control border-input" value="{{$user->balance}}" >
                                  
                                          </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                              <div class="form-group">
                                                  <label>Referral Bonus</label>
                                                  <input type="text" name="bonus" class="form-control border-input" value="{{$user->bonus}}" >
                                      
                                              </div>
                                          </div>
                                        </div>
                                
                            
                    
                                                

                    

                    

                    
                    <div class="text-center">
                        <button type="submit" name="update" class="btn btn-success btn-fill btn-wd" >Update User Profile</button>
                        
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</div>






    
@endsection