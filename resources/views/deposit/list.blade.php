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
            <h4 class="title d-inline">Pending Deposit Request</h4>
            <p class="card-text">You have pending deposit request available. Kindly make payment and upload proof 
                of payment for confirmation.
            
          </div>
          <div class="card-body ">
            @if (session()->has('message'))
              
            <p class="text-success">{{session('message')}}</p>
            @endif
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                    @foreach($deposits as $deps)
                  <tr>
                    <td>
                      
                      <p class="text-white">Amount: {{$deps->amount}}<br/>
                      </p>
                    </td>
                    <td class=" text-right">
                      <a href="/payment/{{$deps->id}}"  title="" class="btn btn-success" >
                        Pay Now
                      </a>
                      <a href="/deposit/delete/{{$deps->id}}"  title="" class="btn btn-warning" >
                      Delete
                      </a>
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



