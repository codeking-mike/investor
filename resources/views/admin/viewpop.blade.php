@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card" style="padding:30px" >
            <div class="card-header">
                <h4 class="card-title">Proof of Payment</h4>
                <p class="category"></p>
                
            </div>
            <div class="content table-responsive table-full-width" style="overflow-x:scroll !important;overflow-y:scroll !important;">
                <table class="table table-striped" >
                    <tr>
                        <td> <b>Name: </b></td>
                    
                        <td>{{ $deposit->name }}</td>
                
                        
                    </tr>
                    <tr>
                        <td> <b>Amount: </b></td>
                    
                        <td>{{ $deposit->amount }}</td>
                
                        
                    </tr>
                    <tr>
                        <td> <b>pop: </b></td>
                    
                        <td><img src="/storage/{{ $deposit->pop }}" height="270" width="230" /></td>
                
                        
                    </tr>
                    <tr>
                        <td> <b> </b></td>
                    
                        <td><a href="/confirm/{{ $deposit->id }}" class="btn btn-danger" >Confirm Payment</a></td>
                
                        
                    </tr>
                    
                </table>

            </div>
        </div>
    </div>

</div>






    
@endsection