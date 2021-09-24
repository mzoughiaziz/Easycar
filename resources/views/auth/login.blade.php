@extends('layouts.app')

@section('content')

    <!-- ====== Banner End ====== -->

    <!-- ====== Login Start ====== -->
    <section class="ud-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-login-wrapper">
              <div class="ud-login-logo">
               <h3>Login</h3>
              </div>
              <form class="ud-login-form"  method="POST" action="{{ route('login') }}">
                  @csrf
                <div class="ud-form-group">
                  <input
                    type="email"
                    name="email"
                    placeholder="Email/username"
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="password"
                    name="password"
                    placeholder="*********"
                  />
                </div>
                <div class="ud-form-group">
                  <button type="submit" class="ud-main-btn w-100">Login</button>
                </div>
              </form>

              
              <p class="signup-option">
                Not a member yet? <a href="{{ route('register') }}"> Sign Up </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Login End ====== -->

    <!-- ====== Footer Start ====== -->
   
 @endsection
