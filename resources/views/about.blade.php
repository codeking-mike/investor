@extends('layout')

@section('content')

<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        About Us </h2>
                    <p class="inner-page-para mt-2">
                        The No.1 Investment platform you can trust</p>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="/">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> About Us</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!--/bottom-3-grids-->
<div class="w3l-3-grids py-5" id="grids-3">
    <div class="container py-md-5 py-2">
        <!--/row-1-->
        <div class="row mb-5 pb-lg-4">
            <div class="col-lg-6 pe-lg-4">
                <div class="title-content text-left">
                    <h6 class="title-subw3hny mb-1">Who we are</h6>
                    <h3 class="title-w3l">The best solutions for your investment needs </h3>
                </div>
            </div>

            <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 ps-lg-5">
                <p class="">Our platform is designed from the ground up to suit the needs of all investors, 
                    from beginners to advanced, these are the best trading accounts in the industry.</p>
            </div>
        </div>
        <!--//row-1-->
        <div class="row pt-md-0 pt-5">
            <div class="col-md-6">
                <div class="abw3-info">
                    <img src="assets/images/banner5.jpg" alt="" class="img-fluid radius-image">
                    <h3 class="title-w3l mt-4 mb-2">Our Approach</h3>
                    <p class="">Creating a user friendly investment platform and community of investors</p>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="abw3-info">
                    <img src="assets/images/banner1.jpg" alt="" class="img-fluid radius-image">
                    <h3 class="title-w3l mt-4 mb-2">Our Mission</h3>
                    <p class="">To help as many of our clients to make profits and earn high ROI through our innovative investment plans</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//bottom-3-grids-->
<!--/Counts-Section-->
<section id="counts" class="w3lcounts">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="fas fa-users"></i>
                    <p class="counter">50,960</p>
                    <p>Happy Clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="far fa-images"></i>
                    <p class="counter">10</p>
                    <p>Portfolios</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="fas fa-headset"></i>
                    <p class="counter">1660</p>
                    <p>Hours Of Support</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                <div class="count-box">
                    <i class="fas fa-user-tie"></i>
                    <p class="counter">20</p>
                    <p>Investment Analyst</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!--//Counts-Section-->
<!--/w3l-project-->
<section class="w3l-index5 py-5">
    <div class="container py-md-3">
        <div class="w3l-project-in">
            <div class="row">
                <div class="col-lg-7">
                    <div class="bottom-info">
                        <div class="header-section pe-lg-5">
                            <h5 class="title-subw3hny mb-3">Invite Your Friends</h5>
                            <h3 class="title-w3l two mb-3">Refer and Earn Commissions
                            </h3>
                            <p>Invites your family and firends to open an account and trade on our platform and earn passive incomes</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self mt-lg-0 mt-sm-5 mt-4">
                    <div class="w3l-buttons d-sm-flex justify-content-end">
                        <a href="/register" class="btn btn-style btn-primary">Register</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-project-->
<!--/w3l-midslider-->
    
@endsection