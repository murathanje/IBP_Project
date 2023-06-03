        <!-- Page Content-->
@extends('Front.pages.index')
@section('title','Giris')
@section('giris')
                <!-- Page Features-->
<section class="vh-100 mt-6 py-0" style="background-color: #fff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border:none !important">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://cnycentral.com/resources/media/8dd45f69-5709-4cc5-be34-54be21595de8-full2x3_Transportation_Travel_School_Bus_IC.png?1670843559932"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form id="girisForm" action="{{ route('loginCheck') }}" method="GET">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img class="d-inline-block"  width="50" src="{{ asset('assets') }}/img/gallery/logo.png" alt="logo">
                    <span class="h1 fw-bold mb-0">Sign In</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" name="girisEmail" id="girisEmail" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="girisPass" type="password" id="girisPass" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-3 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('kayit') }}"
                      style="color: #393f81;">Register here</a></p>
                  <a href="{{ route('terms') }}" class="small text-muted">Terms of use.</a>
                  <a href="{{ route('privacy') }}" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection