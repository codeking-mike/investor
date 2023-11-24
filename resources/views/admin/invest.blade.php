@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-12">
        @if (session()->has('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
            
        @endif

        <div class="card" style="padding:30px" >
            <div class="card-header">
                <h4 class="card-title">ACTIVE INVESTMENT</h4>
                <p class="category"></p>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Users by username.." class="form-control">
            </div>
            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;">
                <table id="myTable" class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                    <tr>
                        <th> Name</th>
                    
                        <th>Amount</th>
                        <th>Earnings</th>
                        <th>Maturity Date</th>
                        <th>Action</th>
                        
                    </tr>
                    <tbody>
                        @foreach ($investments as $invest)
                            
                        
                        <tr>
                            <td>{{ $invest->name }}</td>
                            <td>{{$invest->amount}}</td>
                            <td>{{$invest->earnings}}</td>
                            <td>{{$invest->maturity}}</td>
                            <td>
                           
                            <a href="/viewinvest/{{$invest->id}}" class="btn btn-success">View Invest</a>
                            
                           
                            
                            <a href="/deleteinvest/{{$invest->id}}" class="btn btn-danger">DELETE</a>
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