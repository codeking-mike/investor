
@extends('layout')
@section('content')
    

<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Account Login</h2>
                   
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
            
            <h3 class="title-w3l mb-5">Welcome Back <br>
            </h3>
        </div>

        <div class="contact-grids d-grid mt-5 pt-lg-3">
            <div class="contact-right">
                <div class="cont-details">
                    
                    <p><a href="#" class="mail">Kindly login to continue</a></p>
                
                    
                </div>
            </div>
            <div class="contact-left">
                <form action="/login" method="post" class="signin-form">
                    @csrf
                    @if (session()->has('message'))
              
                    <p class="text-success">{{session('message')}}</p>
                    @endif
                    @if (session()->has('error'))
                    
                    <p class="text-warning">{{session('error')}}</p>
                    @endif
                    <div class="input-grids row">
                        <div class="form-group">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror                  
                            <input type="email" name="email" id="email" placeholder="Your Email*" class="contact-input" required="" />
                           
                            <input type="password" name="password" id="password" placeholder="Enter Password*" class="contact-input" required="" />
                            
                           
                        </div>
                        <p>Don't have an account? <a href="/register" class="link text-success">Register here...</a></p>
                        
                        
                    </div>
                    <div class="submit-w3l-button text-lg-right">
                        <button type="submit" class="btn btn-style btn-primary btn-lg">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>@endsection