@include('components.admin.links')
<div class="account-pages my-5 pt-sm-5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card">

          <div class="card-body p-4">
            {{-- <div class="text-center mt-2">
              <h5 class="text-primary">Welcome Back !</h5>
              <p class="text-muted">Sign in to continue to {{config('app.name')}}.</p>
            </div> --}}
            <div class="p-2 mt-4">
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                  <label class="form-label" for="username">Email</label>
                  <input name="email" type="text" class="form-control" id="username" placeholder="Enter email">
                </div>

                <div class="mb-3">
                  <div class="float-end">
                    <a href="auth-recoverpw.html" class="text-muted">Forgot password?</a>
                  </div>
                  <label class="form-label" for="userpassword">Password</label>
                  <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
                </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="auth-remember-check">
                  <label class="form-check-label" for="auth-remember-check">Remember me</label>
                </div>

                <div class="mt-3 text-end">
                  <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                </div>
                <div class="mt-4 text-center">
                  <p class="mb-0">Don't have an account ? <a href="{{Route('register')}}" class="fw-medium text-primary">
                      Signup now </a> </p>
                </div>
              </form>
            </div>

          </div>
        </div>

        

      </div>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</div>
