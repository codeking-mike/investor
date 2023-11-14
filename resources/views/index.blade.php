@extends('layout')

@section('content')
    

<!--/main-slider -->
<section class="w3l-main-slider banner-slider position-relative" id="home">
    <div class="owl-one owl-carousel owl-theme">
        <div class="item">
            <div class="slider-info banner-view banner-top1">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Finance & Investment Company</h5>
                        <h3 class="title-hero-19">Trade and Invest with the best trading platform</h3>
                        <p class="card-text text-white">Trade across multiple markets with the most stable and reliable pricing in the industry. 
                            Invest in Forex, Cryptocurrency, CFDs and the Commoditiess market.
                        </p>
                        <a href="/register" class="btn btn-style btn-banner mt-sm-5 mt-4">Register<i class="fas fa-arrow-right ms-lg-4 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-- //main-slider -->
<!--/bottom-3-grids-->
<div class="w3l-3-grids py-5" id="grids-3">
    <div class="container py-md-5 py-2">
        <!--/row-1-->
        <div class="row mb-5 pb-lg-4">
            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
    "symbols": [
      {
        "proName": "FOREXCOM:SPXUSD",
        "title": "S&P 500"
      },
      {
        "proName": "FOREXCOM:NSXUSD",
        "title": "US 100"
      },
      {
        "proName": "FX_IDC:EURUSD",
        "title": "EUR to USD"
      },
      {
        "proName": "BITSTAMP:BTCUSD",
        "title": "Bitcoin"
      },
      {
        "proName": "BITSTAMP:ETHUSD",
        "title": "Ethereum"
      }
    ],
    "showSymbolLogo": true,
    "colorTheme": "light",
    "isTransparent": false,
    "displayMode": "adaptive",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->

        </div>
        <div class="row mb-5 pb-lg-4">
            <div class="col-lg-4 pe-lg-4">
                <div class="title-content text-left">
                    <h6 class="title-subw3hny mb-1">About Us</h6>
                    <h3 class="title-w3l">Innovative Investment Solutions </h3>
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-md-5 mt-4 ps-lg-4">
                <p class="">Our platform is designed from the ground up to suit the needs of all investors, 
                    from beginners to advanced, these are the best trading accounts in the industry.</p>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-md-5 mt-4 ps-lg-4">
                <p class="">Join thousands of users who are already investing and earning high returns on our platform</p>
            </div>
        </div>
        <!--//row-1-->
        <div class="row pt-md-0 pt-5">
            <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-4 px-lg-0">
                <div class="grids3-info position-relative">
                    <a href="#" class="d-block zoom"><img src="assets/images/g1.jpg" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info">
                        <h6><a href="#category" class="category d-block">01</a></h6>
                        <h4 class="gdnhy-1"><a href="#">Multiple Investment Plans</a>
                            <a class="w3item-link" href="#">
                                <i class="fas fa-arrow-right ms-lg-4"></i>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4 px-lg-0 grids3-info2">
                <div class="grids3-info second position-relative">
                    <a href="#" class="d-block zoom"><img src="assets/images/g2.jpg" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info second">
                        <h6><a href="#category" class="category d-block">02</a></h6>
                        <h4 class="gdnhy-1"><a href="#">More than 70% ROI</a>
                            <a class="w3item-link" href="#">
                                <i class="fas fa-arrow-right ms-lg-4"></i>
                            </a>
                        </h4>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 px-lg-0">
                <div class="grids3-info position-relative">
                    <a href="#" class="d-block zoom"><img src="assets/images/g6.jpg" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info">
                        <h6><a href="#category" class="category d-block">03</a></h6>

                        <h4 class="gdnhy-1"><a href="#">Fast Withdrawals</a>
                            <a class="w3item-link" href="#">
                                <i class="fas fa-arrow-right ms-lg-4"></i>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//bottom-3-grids-->
<!--/features-section -->
<section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center mb-md-5 mb-4">
            <h6 class="title-subw3hny mb-1"></h6>
            <h3 class="title-w3l mb-5">How it works</h3>
        </div>
        <div class="main-cont-wthree-2 align-items-center text-center pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h4><a href="#service" class="title-head mb-3">Register</a></h4>
                        <p class="text-para">Open a trading account and fund it. We support multiple deposit methods </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <h4><a href="#service" class="title-head mb-3">Invest</a></h4>
                        <p class="text-para">Choose your prefered investment plan and invest to start earning high returns </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <i class="fas fa-podcast"></i>
                        </div>
                        <h4><a href="#service" class="title-head mb-3">Withdraw</a></h4>
                        <p class="text-para">Our withdrawls are fast with zero downtimes. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//features section -->
<section class="w3l-midslider py-5" id="midslider">
  <!-- /grids -->
  <div class="container py-md-5">
      <div class="row">
          <div class="col-lg-5 title-content text-left pe-lg-5 mb-lg-0 mb-5">
              <h6 class="title-subw3hny mb-1">Why Us</h6>
              <h3 class="title-w3l mb-3">
                  Innovative Investment Solutions for all users</h3>
              <p class="mb-3">We offer a diverse innovative investment portfolios to help our users and 
                investors maximise profits and earn high return
              </p>
              <ul class="icon-list-items mt-3">
                  <li class="icon-list-item">
                      <i aria-hidden="true" class="fas fa-check"></i>
                      Innovative Investment
                  </li>
                  <li class="icon-list-item mt-2">
                      <i aria-hidden="true" class="fas fa-check"></i>
                      Fast Withdrawals
                  </li>
                  <li class="icon-list-item mt-2">
                      <i aria-hidden="true" class="fas fa-check"></i>
                      24/7 Support

                  </li>

              </ul>

          </div>
          <!-- /grids -->
          <div class="col-lg-7 stats_info-images ps-lg-5">
              <div class="stats_info-images-right row">
                  <div class="col-6 mid-slider-content">
                      <img src="assets/images/ab1.jpg" class="img-fluid radius-image" alt="">
                  </div>
                  <div class="col-6 mid-slider-content">
                      <img src="assets/images/ab2.jpg" class="img-fluid radius-image" alt="">
                  </div>
              </div>
          </div>

      </div>
      <!-- /grids -->
  </div>
</section>

<!--/w3l-project-->
<section class="w3l-index5 py-5">
    <div class="container py-md-3">
        <div class="w3l-project-in">
            <div class="row">
                <div class="col-lg-7">
                    <div class="bottom-info">
                        <div class="header-section pe-lg-5">
                            <h5 class="title-subw3hny mb-3 text-primary">Invite Your Friends</h5>
                            <h3 class="title-w3l two mb-3">Refer and Earn Commission
                            </h3>
                            <p>Refer your friends to invest and trade with us and earn amazing comissions and bonuses</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self mt-lg-0 mt-sm-5 mt-4">
                    <div class="w3l-buttons d-sm-flex justify-content-end">
                        <a href="/register" class="btn btn-style btn-primary">Register Now</a>
                        <a href="contact.html" class="btn btn-style transparant-btn ms-sm-3">Get Started <i class="fas fa-arrow-right ms-lg-4 ms-2"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-project-->
<!--/w3l-blog-->
<section class="w3l-blog">
    <div class="bloghome py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="w3title-header text-center">
                
                <h3 class="title-w3l mb-5">Market Update</h3>
            </div>
            <div class="row w3l-blogpost-content">
                <div class="col-lg-4 col-md-6 item mt-md-0 mt-5">
                    <div class="card">
                        
                        <div class="card-body blog-details">
                     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
    {
    "colorTheme": "light",
    "dateRange": "12M",
    "showChart": true,
    "locale": "en",
    "largeChartUrl": "",
    "isTransparent": false,
    "showSymbolLogo": true,
    "showFloatingTooltip": false,
    "width": "290",
    "height": "450",
    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
    "gridLineColor": "rgba(240, 243, 250, 0)",
    "scaleFontColor": "rgba(106, 109, 120, 1)",
    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
    "tabs": [
      {
        "title": "Indices",
        "symbols": [
          {
            "s": "FOREXCOM:SPXUSD",
            "d": "S&P 500"
          },
          {
            "s": "FOREXCOM:NSXUSD",
            "d": "US 100"
          },
          {
            "s": "FOREXCOM:DJI",
            "d": "Dow 30"
          },
          {
            "s": "INDEX:NKY",
            "d": "Nikkei 225"
          },
          {
            "s": "INDEX:DEU40",
            "d": "DAX Index"
          },
          {
            "s": "FOREXCOM:UKXGBP",
            "d": "UK 100"
          }
        ],
        "originalTitle": "Indices"
      },
      {
        "title": "Futures",
        "symbols": [
          {
            "s": "CME_MINI:ES1!",
            "d": "S&P 500"
          },
          {
            "s": "CME:6E1!",
            "d": "Euro"
          },
          {
            "s": "COMEX:GC1!",
            "d": "Gold"
          },
          {
            "s": "NYMEX:CL1!",
            "d": "Oil"
          },
          {
            "s": "NYMEX:NG1!",
            "d": "Gas"
          },
          {
            "s": "CBOT:ZC1!",
            "d": "Corn"
          }
        ],
        "originalTitle": "Futures"
      },
      {
        "title": "Bonds",
        "symbols": [
          {
            "s": "CME:GE1!",
            "d": "Eurodollar"
          },
          {
            "s": "CBOT:ZB1!",
            "d": "T-Bond"
          },
          {
            "s": "CBOT:UB1!",
            "d": "Ultra T-Bond"
          },
          {
            "s": "EUREX:FGBL1!",
            "d": "Euro Bund"
          },
          {
            "s": "EUREX:FBTP1!",
            "d": "Euro BTP"
          },
          {
            "s": "EUREX:FGBM1!",
            "d": "Euro BOBL"
          }
        ],
        "originalTitle": "Bonds"
      },
      {
        "title": "Forex",
        "symbols": [
          {
            "s": "FX:EURUSD",
            "d": "EUR to USD"
          },
          {
            "s": "FX:GBPUSD",
            "d": "GBP to USD"
          },
          {
            "s": "FX:USDJPY",
            "d": "USD to JPY"
          },
          {
            "s": "FX:USDCHF",
            "d": "USD to CHF"
          },
          {
            "s": "FX:AUDUSD",
            "d": "AUD to USD"
          },
          {
            "s": "FX:USDCAD",
            "d": "USD to CAD"
          }
        ],
        "originalTitle": "Forex"
      }
    ]
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item mt-md-0 mt-5">
                    <div class="card">
                        
                        <div class="card-body blog-details">
                            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
    {
    "colorTheme": "light",
    "dateRange": "12M",
    "showChart": true,
    "locale": "en",
    "largeChartUrl": "",
    "isTransparent": false,
    "showSymbolLogo": true,
    "showFloatingTooltip": false,
    "width": "290",
    "height": "450",
    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
    "gridLineColor": "rgba(240, 243, 250, 0)",
    "scaleFontColor": "rgba(106, 109, 120, 1)",
    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
    "tabs": [
      {
        "title": "Futures",
        "symbols": [
          {
            "s": "BINANCE:BTCUSDT",
            "d": "Bitcoin"
          },
          {
            "s": "BINANCE:ETHUSDT",
            "d": "Ether"
          },
          {
            "s": "BINANCE:MATICUSDT",
            "d": "Matic"
          },
          {
            "s": "BINANCE:DOGEUSDT",
            "d": "Doge"
          }
        ],
        "originalTitle": "Futures"
      },
      {
        "title": "Forex",
        "symbols": [
          {
            "s": "FX:EURUSD",
            "d": "EUR to USD"
          },
          {
            "s": "FX:GBPUSD",
            "d": "GBP to USD"
          },
          {
            "s": "FX:USDJPY",
            "d": "USD to JPY"
          },
          {
            "s": "FX:USDCHF",
            "d": "USD to CHF"
          },
          {
            "s": "FX:AUDUSD",
            "d": "AUD to USD"
          },
          {
            "s": "FX:USDCAD",
            "d": "USD to CAD"
          }
        ],
        "originalTitle": "Forex"
      },
      {
        "title": "Crypto",
        "symbols": []
      }
    ]
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
</section>
<!--//w3l-blog-->
    

@endsection