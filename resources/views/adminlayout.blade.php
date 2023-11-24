<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>
    Admin | Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href={{asset("assets3/css/material-dashboard.css?v=2.1.1")}} rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href={{asset("assets3/demo/demo.css")}} rel="stylesheet" />
  
  <style>
     .modal-body table{
      position:relative;
      width:100%;
      padding:2px;
  }
  .modal-body tr{
      width:100%;
      border:1px solid #888;
  }
  .modal-body tr{
      padding:2px;
      border-left:1px solid #888;
  }
  
  </style>
  <script>

function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0] ;
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }


  </script>
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="white" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="/admin" class="simple-text logo-normal">
          Bonretours
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="/admin">
              
              <p>Dashboard</p>
            </a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="/users">
            
              <p>All Users</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="/admin/deposit">
              
              <p>Investors</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/admin/account">
        
              <p>Payment Accounts</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/admin/invest">
              
              <p>Site Summary</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="/admin/profile">
              
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="admin/support">
              
              <p>Support Messages</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="admin/create">
              
              <p>Create Admin Account</p>
            </a>
          </li>
		  
          
          <li class="nav-item ">
            <a class="nav-link" href="/logout">
            
              <p>Log Out</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="index.php">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          
        </div>
      </nav>
      <!-- End Navbar -->
   
    <div class="content">
        <div class="container-fluid">
          <div class="row">
		  
			
            @yield('content')
            

			
            
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            <a href="#" target="_blank">Bonretours Investment</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
</div>
  
  <!--   Core JS Files   -->
  <script src={{asset("assets3/js/core/jquery.min.js")}}></script>
  <script src={{asset("assets3/js/core/popper.min.js")}}></script>
  <script src={{asset("assets3/js/core/bootstrap-material-design.min.js")}}></script>
  <script src={{asset("assets3/js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
  <script src={{asset("assets3/js/plugins/jquery.bootstrap-wizard.js")}}></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets3/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./assets3/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src={{asset("assets3/js/plugins/jquery.dataTables.min.js")}}></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src={{asset("assets3/js/plugins/jasny-bootstrap.min.js")}}></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src={{asset("assets3/js/plugins/bootstrap-notify.js")}}></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src={{asset("assets3/js/material-dashboard.js?v=2.1.1")}}></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src={{asset("assets3/demo/demo.js")}}></script>
  
  <script>
$(document).ready(function(){
        $("#myModal").modal({backdrop: false});
});
</script>
</body>

</html>

