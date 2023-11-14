@extends('accountlayout')

@section('content')

<div class="content">

    

    <div class="row mb-1">
        <div class="container-fluid">
             <div class="row mt-3">
            
        
              @if (session()->has('success'))
              
              <p class="text-success">{{session('success')}}</p>
              @endif
              @if (session()->has('error'))
              
              <p class="text-warning">{{session('error')}}</p>
              @endif

               
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3>Edit your account profile</h3>
                        <p>
                        </p>
                        
                           
                      </div>
                      <div class="card-body">
                        <form action="/profile/{{auth()->user()->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <h4 class="card-category">Add your mobile money account for fast withdrawal processing</h4>
                            <div class="form-floating mb-3">
                              <label for="floatingInput">Momo Name</label>
                              <input type="text" name="momo_name" class="form-control" id="floatingInput" value="{{auth()->user()->momo_name}}">
                              
                            </div>
                            <div class="form-floating">
                              <label for="floatingPassword">Momo Number</label>
                              <input type="text" name="momo_no" class="form-control" id="floatingPassword" value="{{auth()->user()->momo_no}}">
                              
                            </div>
                            <div class="form-floating mb-3">
                              <label for="floatingInput">Momo Network</label>
                              <input type="text" name="momo_network" class="form-control" id="floatingInput" value="{{auth()->user()->momo_network}}">
                              
                            </div>
                            <div class="form-floating">
                               <label for="floatingSelect">Country of Residence</label>
                              <select class="form-select form-control" name="country" id="floatingSelect" aria-label="Floating label select example">
                              
                                
                                <option>Cameroon</option>
                              </select>
                             
                            </div>
                            <div class="form-floating mb-3">
                               <label for="floatingInput">First Name</label>
                              <input type="text" name="firstname" class="form-control" id="floatingInput" value="{{auth()->user()->firstname}}">
                             
                            </div>
                            <div class="form-floating">
                               <label for="floatingPassword">Lastname</label>
                              <input type="text" name="lastname" class="form-control" id="floatingPassword" value="{{auth()->user()->lastname}}">
                             
                            </div>
                            <div class="form-floating mb-3">
                              <label for="floatingInput">Email address</label>
                              <input type="email" name="email" class="form-control" id="floatingInput" value="{{auth()->user()->email}}">
                              
                            </div>
                            <div class="form-floating">
                              <label for="floatingPassword">Phone number</label>
                              <input type="text" name="phone" class="form-control" id="floatingPassword" value="{{auth()->user()->phone}}">
                              
                            </div>
                           
                            
                            

                            <div class="form-group">
                                <button type="submit" name="fund" class="btn btn-fill btn-success">Update</button>
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
