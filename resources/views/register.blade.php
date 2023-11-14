
@extends('layout')
@section('content')
    

<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Create Account</h2>
                    <p class="inner-page-para mt-2">
                        Open a trading account to start investing</p>
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
            
            <h3 class="title-w3l mb-5">Register <br>
            </h3>
        </div>

        <div class="contact-grids d-grid mt-5 pt-lg-3">
            <div class="contact-right">
                <div class="cont-details">
                    
                    <p><a href="#" class="mail">Fill in your details to create an account</a></p>
                
                    
                </div>
            </div>
            <div class="contact-left">
                <form action="/register" method="post" class="signin-form">
                    @csrf
                    <input type="hidden" name="level" value="1">
                    <input type="hidden" name="role" value="user">
                    <div class="input-grids row">
                        <div class="form-group col-md-6">
                            <input type="text" name="firstname" placeholder="Firstname*" class="contact-input" value="{{old('firstname')}}" required="" />
                            @error('firstname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="lastname" placeholder="Surname*" class="contact-input" value="{{old('lastname')}}" required="" />
                            @error('lastname')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-grids row">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email*" class="contact-input" value="{{old('email')}}" required="" />
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" name="phone" placeholder="Phone Number" value="{{old('phone')}}" class="contact-input" />
                            
                           
                            <input type="password" name="password" id="password" placeholder="Enter Password*" class="contact-input" required="" />
                            <input type="password" name="pass2" id="pass2" placeholder="Confirm Password*" class="contact-input" required="" />
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" name="referal_id" placeholder="Referral Code" value="{{$ref}}" class="contact-input" />
                        </div>
                        
                        
                    </div>
                    <div class="submit-w3l-button text-lg-right">
                        <button type="submit" class="btn btn-style btn-primary btn-lg">Create Account</button>
                    </div>
                    <p>Already have an account? <a href="/login" class="link text-success">Login here...</a></p>
                </form>
            </div>
        </div>
    </div>
</section>@endsection