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
                <form action="/addaccount" method="post">
                    @csrf
                
                    
                      
                      <div class="row">
                      <div class="col-md-7">
                            <div class="form-group">
                                <label>Country of Residence</label>
                                <input type="text" name="country" class="form-control border-input" >
                    
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                              <div class="form-group">
                                  <label>Momo Name</label>
                                  <input type="text" name="momoname" class="form-control border-input" >
                      
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                  <div class="form-group">
                                      <label>Momo Number</label>
                                      <input type="text" name="momono" class="form-control border-input" >
                          
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                      <div class="form-group">
                                          <label>Momo Network</label>
                                          <input type="text" name="network" class="form-control border-input" >
                              
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                          <div class="form-group">
                                              <label>Country</label>
                                              <input type="text" name="country" class="form-control border-input"  >
                                  
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

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
                
            @endif
    
            <div class="card" style="padding:30px" >
                <div class="card-header">
                    <h4 class="card-title">PAYMOUNT ACCOUNTS</h4>
                    <p class="category"></p>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Users by username.." class="form-control">
                </div>
                <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;">
                    <table id="myTable" class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                        <tr>
                            <th>MOMO Name</th>
                        
                            <th>MOMO NUMBER</th>
                            <th>NETWORK</th>
                            <th>Action</th>
                            
                        </tr>
                        <tbody>
                            @foreach ($account as $acc)
                                
                            
                            <tr>
                                <td>{{ $with->name }}</td>
                                <td>{{$with->amount}}</td>
                               
                                <td>
                               
                                <a href="/viewbonus/{{$with->id}}" class="btn btn-success">Process</a>
                                
                               
                                
                                <a href="/deletewithdrawal/{{$with->id}}" class="btn btn-danger">DELETE</a>
                                </td>
                                
                        
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
    
                </div>
            </div>
    
    </div>

</div>






    
@endsection