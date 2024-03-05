@extends('frontend.layouts.app')
@section('content')


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                    
                    <h1 class="display-4 text-uppercase text-white">Login Form</h1>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>                       
                @endif
                <form method="POST" action="{{ route('customer.login') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email address"/>
                      {{-- <label class="form-label" for="form2Example1">Email address</label> --}}
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password"/>
                      {{-- <label class="form-label" for="form2Example2">Password</label> --}}
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                  
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="registerUser">Register</a></p>
                      <p>or sign up with:</p>
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                  
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                      </button>
                  
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>
                  
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                      </button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->




@endsection