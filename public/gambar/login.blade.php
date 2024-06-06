@extends('layouts.template')

@section('judul')
login
@endsection

<section id="login" class="login d-flex justify-content-center align-items-center">
  <div class="col-md-4 mt-5">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title text-center">LOGIN</h1>
        <form id="loginForm" onsubmit="return validateLogin()">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" required>
          </div>
          <button type="submit" class="btn btn-primary" style="background-color: #4154f1;">Login</button>
          <div class="mt-3 text-center">Or Register with:</div>
          <a href="#" class="btn btn-secondary mt-3 w-100">
            <img src="{{ asset('gambar/glogo.png') }}" alt="Google Logo" class="me-2" style="width: 20px;"> Login with Google
          </a>
          <a href="#" class="btn btn-secondary mt-3 w-100">
            <img src="{{ asset('gambar/x.png') }}" alt="Google Logo" class="me-2" style="width: 20px;"> Login with X
          </a>
          <a href="#" class="btn btn-secondary mt-3 w-100">
            <img src="{{ asset('gambar/facebook.png') }}" alt="Google Logo" class="me-2" style="width: 20px;"> Login with Facebook
          </a>
        </form>
      </div>
    </div>
  </div>
</section>
