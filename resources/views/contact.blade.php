
@extends('layout')
@section('content')
    

<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Contact Us </h2>
                    <p class="inner-page-para mt-2">
                        The Unique Solutions
                        for Your Business</p>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact Us</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- /contacts -->
<!-- contact-form 2 -->
<section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-4 py-md-3 py-2">
        <div class="title-content text-center">
            <h6 class="title-subw3hny mb-1">Get in touch</h6>
            <h3 class="title-w3l mb-5">Contact our support <br>
            </h3>
        </div>

        <div class="contact-grids d-grid mt-5 pt-lg-3">
            <div class="contact-left">
                <div class="cont-details">
                    
                    
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="far fa-envelope"></span>
                        </div>
                        <div class="cont-right">
                            <h6>
                                Mail us:</h6>
                            <p><a href="mailto:support@mail.com" class="mail">support@bonretours.com</a></p>
                            <p><a href="mailto:contact@mail.com" class="mail">contact@bonretours.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <form action="/contact" method="post" class="signin-form">
                    @csrf
                    <div class="input-grids">
                        <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" required="" />
                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
                        <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" required="" />
                    </div>
                    <div class="form-input">
                        <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                    </div>
                    <div class="submit-w3l-button text-lg-right">
                        <button class="btn btn-style btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection