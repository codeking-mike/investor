@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card" style="padding:30px" >
            <div class="card-header">
                <h4 class="card-title">ALL USERS</h4>
                <p class="category"></p>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Users by username.." class="form-control">
            </div>
            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;">
                <table id="myTable" class="table table-striped" style="overflow-x:scroll !important;overflow-y:scroll !important">
                    <tr>
                        <th> Name</th>
                    
                        <th>Email Address</th>
                        <th>Action</th>
                        
                    </tr>
                    <tbody>
                        @foreach ($users as $user)
                            
                        
                        <tr>
                            <td>{{$user->firstname}} {{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="/edituser/{{$user->id}}" class="btn btn-success">EDIT</a>
                            <a href="/deleteuser/{{$user->id}}" class="btn btn-danger">DELETE USER</a>
                            <a href="/switch/{{$user->id}}" class="btn btn-primary">LOGIN AS USER</a>
                    
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>






    
@endsection