@extends('accountlayout')

@section('content')

<div class="content">

    <div class="row mb-1">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
          <h4 class="font-weight-bold text-white">Hi, {{auth()->user()->firstname}}</h4>
          <p class="font-weight-normal mb-2 text-muted">
           
            
            <span class="text-white"><strong>Account Level: </strong>{{auth()->user()->level}}</span></p>
          </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="container-fluid">
             <div class="row mt-3">
             
                <div class="col-md-12">
                  @if (session()->has('message'))
              
                  <p class="text-success">{{session('message')}}</p>
                  @endif
                  @if (session()->has('error'))
                  
                  <p class="text-warning">{{session('error')}}</p>
                  @endif
                  <div class="alert" role="alert">
                    <h4 class="alert-heading">Invite your friends to earn!</h4>
                    <p> Refer your friends and earn 8% referral bonus. Refer 8 people and upgrade to level 2 and 
                      earn 12% referral bonus. Refer 18 people and upgrade to level 3 to earn 16% referral bonus.
                      Refer 30 people and upgrade to earn 20% referral bonus. </p>
                    <hr>
                    <div class="input-group mb-3">
                      <input type="text" id="link" value="https://bonretours.com/register?ref={{auth()->user()->id}}" class="form-control" aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2" onclick="copyLink2()" class="btn btn-success"><i class="tim-icons icon-single-copy-04"></i>Copy Link</span>
                    </div>
                    <h4 >Referral Code: {{auth()->user()->id}}</h4>
                  </div>
                    
                    
                </div>
               

             

                <div class="col-md-12">
                 
                    <div class="card" style="color:#fff !important;text-align:center">
                        <div class="card-header">
                          <i class="tim-icons icon-bank"></i>
                            <h4 class="card-title">Referral Bonus</h4>
                           
                              @if (auth()->user()->bonus == null)
                              <h2 class="card-title"><strong>0.00 </strong></h2>
                              @else  
                              <h2 class="card-title"><strong>{{auth()->user()->bonus}}</strong></h2>
                              @endif
                              <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <h5 class="card-title">Account level</h5>
                                    <h6> 
                                        {{auth()->user()->level}}
                                    </h6>
                                  </div>
                                  <div class="col">
                                    <h5 class="card-title">Referrals</h5>
                                     
                                      <strong>{{$num}} </strong>
                                    
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                  
                                  
                                  <div class="col">
                                    <a href="/withdraw/bonus" class="btn-info btn-lg px-4 py-2 text-left">Withdraw <i class="tim-icons icon-cloud-download-93"></i></a>
                                  
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                </div>
                
                

             </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-tasks" >

         <h3 class="card-title font-weight-bold text-center">Referrals</h3>
          <div class="card-body ">
            <div class="table-full-width table-responsive">
              <table class="table">
                <thead>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Registration Date
                    </th>
                </thead>
                <tbody>
                    @foreach ($referals as $ref)
                        
                   
                  <tr>
                    <td>
                      <p>{{$ref->firstname}}</p>
                      
                    </td>
                    <td>
                        <p>{{$ref->email}}</p>
                    </td>
                    <td>
                        <p>{{$ref->created_at}}</p>
                    </td>

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



