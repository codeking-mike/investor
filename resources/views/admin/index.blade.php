@extends('adminlayout')

@section('content')


<div class="row">
    <div class="col-md-6 col-sm-6">
      <div class="card card-stats">
              <a href="/admin/deposit">
                <div class="card-header card-header-info card-header-icon">
                
                <p class="card-category">Depositors</p>
                <h3 class="card-title">
                  {{$dep}}
                    <small></small>
                </h3>
                </div>
              </a>
            <div class="card-footer">
            <div class="stats">
                
                <a href="/admin/deposit" class='btn btn-info'>VIEW DEPOSITORS</a>
            </div>
            </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="card card-stats">
      <a href="/admin/invest">
        <div class="card-header card-header-success card-header-icon">
          
          <p class="card-category">Active Investments</p>
          <h3 class="card-title">
            {{$invest}}
            <small></small>
          </h3>
        </div>
        </a>
        <div class="card-footer">
          <div class="stats">
            
            <a href="/admin/invest" class='btn btn-success'>VIEW INVESTORS</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6">
      <div class="card card-stats">
      <a href="/admin/withdrawal">
        <div class="card-header card-header-info card-header-icon">
         
          <p class="card-category">Withdrawal
          <h3 class="card-title">
            {{$withdraws}}
          </h3>
        </div>
        </a>
        <div class="card-footer">
          <div class="stats">
          <a href='/admin/withdrawal' class='btn btn-info'> VIEW REQUESTS</a>
          </div>
        </div>
      </div>
    </div>
     
    
    
    <div class="col-md-6 col-sm-6">
      <div class="card card-stats">
       <a href="/admin/bonus">
        <div class="card-header card-header-success card-header-icon">
         
          <p class="card-category">REFERAL BONUS</p>
          <h3 class="card-title">
            {{$bonus}}	
          
          </h3>
        </div>
        </a>
        <div class="card-footer">
          <div class="stats">
            <a href="/admin/bonus" class="btn btn-success" >VIEW BONUSES</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6">
      <div class="card card-stats">
       <a href="/admin/support">
        <div class="card-header card-header-info card-header-icon">
          
          <p class="card-category">SUPPORT</p>
          <h3 class="card-title">
           	
            {{$msg}}	
          </h3>
        </div>
        </a>
        <div class="card-footer">
          <div class="stats">
            <a href="/admin/support" class="btn btn-info" >VIEW MESSAGES</a>
          </div>
        </div>
      </div>
    </div>
    

  
  

</div>

<div class="row">
  <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-info">
          
          <h4 class="card-title">Site Stats</h4>
          <p class="card-category">Current Date : <?php echo date("Y-m-d H:i:s") ?></p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            
            <tbody>
              <tr>
                <td><a href="/users"><b>Total Users</b></a></td>
                <td>
                  {{$users}}
                </td>
              </tr>
              

              <tr>
                <td><a href="#"><b>Cummulative Investments</b></a></td>
                <td>
                  {{$sum}}
                
                </td>
              </a></tr>
              <tr>
                <td><a href="#"><b>Cummulative Withdrawals</b></a></td>
                <td>
                  {{$with}}
                
                </td>
              </a></tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>




    
@endsection