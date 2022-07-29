@include('components.admin.links')

<div  class="account-pages my-5 pt-sm-5"  style="background-color: #000; width: 100%; margin: 0 !important; height: 100vh;">
  <div class="container" >
    <div class="row align-items-center justify-content-center" >
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card">

          <div class="card-body p-4">

            <x-jet-validation-errors class="mb-4" />

            <div class="text-center mt-2">
              <h5 class="text-primary">Регистрация Аккаунта</h5>
            </div>
            <div class="p-2 mt-4">
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                  <label class="form-label" for="name">имя</label>
                  <input name="name" type="text" class="form-control" id="name" autofocus placeholder="Введите имя" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="lastname">Фамилия</label>
                  <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Фамилия" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="useremail">Введите адрес электронной почты</label>
                  <input name="email" type="email" class="form-control" id="useremail" placeholder="Введите адрес электронной почты" required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="phone">Телефон</label>
                  <input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон " required>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="userpassword">Пароль</label>
                  <input name="password" type="password" class="form-control" id="userpassword" placeholder="Введите пароль" required autocomplete="new-password">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="password_confirmation">Пароль</label>
                  <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" required placeholder="Подтвердите свой пароль" autocomplete="new-password">
                </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                  <label class="form-check-label" for="auth-terms-condition-check">Я принимаю <a
                      href="javascript: void(0);" class="text-dark">Условия и положения</a></label>
                </div>
                



                <div class="mt-3 text-end">
                  <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Pегистр</button>
                </div>

                <div class="mt-4 text-center">
                  <div class="signin-other-title">
                    <h5 class="font-size-14 mb-3 title">Зарегистрируйтесь, используя</h5>
                  </div>


                  
                </div>

                <div class="mt-4 text-center">
                  <p class="text-muted mb-0">У вас уже есть аккаунт?<a href="{{ Route('login') }}"
                      class="fw-medium text-primary"> Авторизоваться</a></p>
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
