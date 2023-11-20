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
            <span class="text-white"><strong>Notifications and Support Messages</strong></span></p>
          </div>
          </div>
       </div>
    </div>

    
    <div class="row">
      <div class="col-md-12">
        <div class="card card-tasks" style="">

         
          <div class="card-body ">
            @if (session()->has('message'))
              
            <p class="text-success">{{session('message')}}</p>
            @endif
            <div class="table-full-width table-responsive">
              <table class="table">
                <thead>
                    <tr>
                        <th>Date </th>
                        <th>Sender</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($support as $hist)
                  <tr>
                    <td>
                      
                      <p class="text-white">{{$hist->created_at}}<br/>
                      </p>
                    </td>
                    <td>
                      
                        <p class="text-white">{{$hist->sender}}<br/>
                        </p>
                      </td>
                    <td>
                      
                        <p class="text-white">{{$hist->message}}<br/>
                        </p>
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



