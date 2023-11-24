@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-12">
        @if (session()->has('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
            
        @endif

        <div class="card" style="padding:30px" >
            <div class="card-header">
                <h4 class="card-title">DEPOSIT REQUEST</h4>
                <p class="category"></p>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Users by username.." class="form-control">
            </div>
            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;">
                <table id="myTable" class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                    <tr>
                        <th> Name</th>
                    
                        <th>Amount</th>
                        <th>Action</th>
                        
                    </tr>
                    <tbody>
                        @foreach ($deposits as $dep)
                            
                        
                        <tr>
                            <td>{{ $dep->name }}</td>
                            <td>{{$dep->amount}}</td>
                            <td>
                            @if ($dep->pop == null)
                            <a href="#" class="btn btn-info">NO POP</a>  
                            @else
                            <a href="/viewpop/{{$dep->id}}" class="btn btn-success">View POP</a>
                            
                            @endif
                            
                            <a href="/deletedeposit/{{$dep->id}}" class="btn btn-danger">DELETE</a>
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