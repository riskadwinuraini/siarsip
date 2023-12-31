@extends('layouts.guest')
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center>
                <img src="{{ asset('assets/images/file-icons/Logo.png')}}" alt="logo">
              </center>
              </div>
              <center>
                <h4>Masuk sebagai Admin</h4>
              </center>
              
              <h6 class="font-weight-light"> Masukkan Email dan Password dengan benar</h6>
              <form class="pt-1" method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email  ">
                  @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">MASUK</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  {{-- Don't have an account? <a href="{{ route('register')}}" class="text-primary">Create</a> --}}
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection