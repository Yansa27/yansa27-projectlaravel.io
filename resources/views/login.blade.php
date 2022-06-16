@extends('template')
@section('judul','login')
@section('konten')


<!-- Card -->
<div class="container">

  <div class="pt-4 pb-3">

    <h5 class="text-center mt-1 mb-4">LOGIN</h5>

    <form action="#!">

      <div class="md-form md-outline">
        <input type="email" id="defaultForm-email1" class="form-control">
        <label data-error="wrong" data-success="right" for="defaultForm-email1">Your email</label>
      </div>
      <div class="md-form md-outline">
        <input type="password" id="defaultForm-pass1" class="form-control">
        <label data-error="wrong" data-success="right" for="defaultForm-pass1">Your password</label>
      </div>

    </form>

    <div class="d-flex justify-content-between align-items-center mb-2">

      <div class="form-check pl-0 mb-3">
        <input type="checkbox" class="form-check-input filled-in" id="new">
        <label class="form-check-label small text-uppercase card-link-secondary" for="new">Remember me</label>
      </div>

      <p><a href="">Forgot password?</a></p>

    </div>

    <div class="text-center pb-2">

      <button type="submit" class="btn btn-primary mb-4">Sign in</button>

      <p>Not a member? <a href="">Register</a></p>

      <p>or sign in with:</p>

      <a type="button" class="btn-floating btn-fb btn-sm mr-1">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm mr-1">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm mr-1">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a>

    </div>

  </div>

</div>
@endsection
<!-- Card -->