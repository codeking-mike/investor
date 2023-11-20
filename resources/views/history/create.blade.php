@extends('accountlayout')

@section('content')

<div class="content">

    

    <div class="row mb-1">
        <div class="container-fluid">
             <div class="row mt-3">
            
        
              @if (session()->has('message'))
              
              <p class="text-success">{{session('message')}}</p>
              @endif
              @if (session()->has('error'))
              
              <p class="text-warning">{{session('error')}}</p>
              @endif

                
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h3>Contact Support</h3>
                        <p>
                        </p>
                        
                           
                      </div>
                      <div class="card-body">
                        <form action="/support " method="post">
                            @csrf
                            <h4 class="card-category">Message Support</h4>
                            
                            <div class="form-group">
                                <textarea name="msg" id="" cols="30" rows="10"></textarea>
                                
                                <input type="hidden" name="sender"  class="form-control" value="{{auth()->user()->id}}" >
                        
                            </div>

                            <div class="form-group">
                                <button type="submit" name="fund" class="btn btn-fill btn-success">Send</button>
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
