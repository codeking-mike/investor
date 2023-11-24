<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/uchain-logo.png">
  <title>
    {{$title}}
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Nucleo Icons -->
  <link href="{{asset('assets2/css/nucleo-icons.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('assets2/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets2/demo/demo.css" rel="stylesheet')}}" />
  <style>
    #paypal, #bank{
        display: none;
    }
    
   
</style>
<?php
    function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
   <script>
  let text = document.getElementById('copy').innerHTML;
  const copyContent = async () => {
    try {
      await navigator.clipboard.writeText(text);
      alert('Content copied to clipboard');
    } catch (err) {
      alert('Failed to copy: ', err);
    }
  }


function copyLink2() {
  /* Get the text field */
  var copyText = document.getElementById("link");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied: " + copyText.value);
}
  
  </script>
 
</head>

<body class="">
<div class="wrapper">
   <!-- Navbar -->
    <div class="sidebar bg-info" data-color="red">
        <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/account">
              <i class="tim-icons icon-chart-pie-36"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user/profile" aria-controls="ui-basic">
              <i class="tim-icons icon-single-02"></i>
              <span class="menu-title">My Profile</span>
              <i class="menu-arrow"></i>
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/deposit">
              <i class="tim-icons icon-cloud-upload-94"></i>
              <span class="menu-title">Deposit Funds</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/invest">
              <i class="tim-icons icon-cloud-upload-94"></i>
              <span class="menu-title">Invest</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/referal">
              <i class="tim-icons icon-bell-55"></i>
              <span class="menu-title">Referrals</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/history">
              <i class="tim-icons icon-bell-55"></i>
              <span class="menu-title">Transaction History</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/notification">
              <i class="tim-icons icon-bell-55"></i>
              <span class="menu-title">Notifications</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="/support">
              <i class="tim-icons icon-world"></i>
              <span class="menu-title">Contact Support</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/logout">
              <i class="tim-icons icon-spaceship"></i>
              <span class="menu-title">Log Out</span>
            </a>
          </li>
        </ul>

        </div>

   </div>
    <!-- Navbar -->
     <!-- TopNav -->
   <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
          <img src="{{asset('assets2/img/bonretours.jpg')}}" width="50" height="50" alt="Profile Photo"><span class="text-white"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              
              
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="/user/profile" class="nav-item dropdown-item">Profile</a></li>
                  
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="/logout" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
       @yield('content')

       <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Bons retours
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
        </div>
</footer>
</div>







</body>
<!--   Core JS Files   -->
<script src="{{asset('assets2/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets2/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets2/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets2/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
 
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets2/js/black-dashboard.min.js?v=1.0.0')}}"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets2/demo/demo.js')}}"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script>
    $(document).ready(function() {
		setInterval(changeValue(), 3000);
		
	});
  </script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>


  
</body>

</html>