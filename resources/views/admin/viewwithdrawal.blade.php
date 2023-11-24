@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card" style="padding:30px" >
            <div class="card-header">
                <h4 class="card-title">Complete Payout</h4>
                <p class="category"></p>
                
            </div>
            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;">
                <table class="table table-striped" >
                    <tr>
                        <td> <b>Name: </b></td>
                    
                        <td>{{ $with->name }}</td>
                
                        
                    </tr>
                    <tr>
                        <td> <b>Amount: </b></td>
                    
                        <td>{{ $with->amount }}</td>
                
                        
                    </tr>
                    <tr>
                        <td> <b>Momo Name: </b></td>
                    
                        <td>{{ $user->momo_name }}</td>
                
                        
                    </tr>
                    <tr>
                        <td> <b>Momo Number: </b></td>
                    
                        <td>{{ $user->momo_no }}</td>
                
                        
                    </tr>
                    <tr>
                        <td> <b>Momo Network: </b></td>
                    
                        <td>{{ $user->momo_network }}</td>
                
                        
                    </tr>
                    <tr>
                        <td> <b>Country: </b></td>
                    
                        <td>{{ $user->country }}</td>
                
                        
                    </tr>
                   
                    <tr>
                        <td> <b> </b></td>
                    
                        <td><a href="/complete/{{ $with->id }}" class="btn btn-danger" >Complete Payout</a></td>
                
                        
                    </tr>
                    
                </table>

            </div>
        </div>
    </div>

</div>






    
@endsection