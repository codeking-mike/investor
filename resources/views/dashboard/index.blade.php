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
        <div class="container-fluid">
             <div class="row mt-3">
              <div class="col-md-12">
                
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="alert alert-info ">
                        <p class="text-white">
                            
                          
                              Become an affiliate an earn up to 20% commission from trading fees. <a href="/referal" class="alert-link">Refer your friends...</a>
                                  
                        </p>
                    </div>
                    </div>
                    <div class="carousel-item">
                      <div class="alert alert-warning ">
                        <p class="text-white">
                            
                          
                              Become an affiliate an earn up to 20% commission from trading fees. <a href="/referal" class="alert-link">Refer your friends...</a>
                                  
                        </p>
                    </div>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
             @if ($investments > 0)
             <div class="col-md-12">
              
              <div class="alert alert-success">
                  <p class="text-white">
                      
                      <a href="/invest/list" class="px-2 py-2 text-left text-white">
                       You have {{$investments}} active investments... Click to view investments<i class="tim-icons icon-send"></i></a>
                            
                  </p>
              </div>
          </div> 
             @endif

             @if ($depcnt > 0)
             <div class="col-md-12">
              <div class="alert alert-info">
                  <p class="text-white">
                      
                      <a href="/deposits/list" class="px-2 py-2 text-left text-white">
                       You have <span class="bg-dark text-white p-1"> {{$depcnt}}</span> pending deposit requests... Click to make payment and upload proof of payment for confirmation<i class="tim-icons icon-send"></i></a>
                            
                  </p>
              </div>
          </div> 
             @endif
              

                <div class="col-md-12">
                    <div class="card" style="color:#fff !important;text-align:center">
                        <div class="card-header">
                          <i class="tim-icons icon-bank"></i>
                            <h4 class="card-title">Total Balance(CFA)</h4>
                           
                              @if (auth()->user()->balance == '')
                              <h2 class="card-title"><strong>0.00 </strong></h2>
                              @else  
                              <h2 class="card-title"><strong>{{auth()->user()->balance}}</strong></h2>
                              @endif
                              <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <h5 class="card-title">Investment Profit</h5>
                                    <h6> 
                                      @if ($sum > 0)
                                      <strong>{{$sum}} </strong>
                                      @else  
                                      <strong>0.00 </strong>
                                      @endif
                                    </h6>
                                  </div>
                                  <div class="col">
                                    <h5 class="card-title">Bonus</h5>
                                    @if (auth()->user()->bonus == '')
                                      <strong>0.00 </strong>
                                      
                                      @else  
                                      <strong>{{auth()->user()->bonus}} </strong>
                                      @endif
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <a href="/deposit" class="btn-success px-4 py-2 text-left">Deposit <i class="tim-icons icon-cloud-upload-94"></i></a>
                                  </div>
                                  
                                  <div class="col">
                                    <a href="/withdraw" class="btn-warning px-4 py-2 text-left">Withdraw <i class="tim-icons icon-cloud-download-93"></i></a>
                                  
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                  <div class="container">
                    <div class="row">
                      <div class="col-6">
                             <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
  {
  "symbol": "BINANCE:BTCUSDT",
  "width": "100%",
  "colorTheme": "dark",
  "isTransparent": false,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                      </div>
                      
                      <div class="col-6">
                          <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
  {
  "symbol": "BINANCE:ETHUSDT",
  "width": "100%",
  "colorTheme": "dark",
  "isTransparent": false,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->                    
                      </div>
                    </div>
                  </div>

                </div> 

             </div>

        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-tasks" style="max-height: 390px !important">

          <div class="card-header ">
            <h4 class="card-title d-inline text-center">Investment Package</h4>
            
            
          </div>
          <div class="card-body ">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <p class="title">Beginner Plan</p>
                      <p class="text-muted">Min. Investment: 10,000 cfa <br/>
                        Max. Investment: 5,000,000 cfa<br/>
                        ROI: Earn 40% in 8 days
                      </p>
                    </td>
                    <td class="td-actions text-right">
                      <a href="/invest/" rel="tooltip" title="" class="btn btn-success" data-original-title="Invest">
                        Invest
                      </a>
                    </td>

                  </tr>
                  <tr>
                    <td>
                      <p class="title">Premium Plan</p>
                      <p class="text-muted">Min. Investment: 10,000 cfa <br/>
                        Max. Investment: 10,000,000 cfa<br/>
                        ROI: Earn 70% in 14 days
                      </p>
                    </td>
                    <td class="td-actions text-right">
                      <a href="/invest/" rel="tooltip" title="" class="btn btn-info" data-original-title="Invest">
                        Invest
                      </a>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

</div>
@endsection



