<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard Login</title>
    <link href='/css/app.css' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Sign In</h5>
                <form class="form-signin" method="post">
                  <!-- @if(Session::has('message')) -->
                  <p class="alert">{{ Session::get('message') }}</p>
                  <!-- @endif -->
                  <div class="form-label-group mb-3">
                      <label for="inputEmail">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

                  </div>

                  <div class="form-label-group mb-3">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  </div>

                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" name="stay-login" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </body>

</html>
