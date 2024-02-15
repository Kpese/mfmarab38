
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{ asset('admin_assets/choices.js/styles/choices.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin_assets/img/navlogo.png') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
        <div class="container d-flex align-items-center position-relative py-5">
          <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
            <div class="card-body p-0">
              <div class="row gx-0 align-items-stretch">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                  <div class="info d-flex justify-content-center flex-column p-4 h-100">
                    <div class="py-5">
                      <h1 class="display-6 fw-bold">MFM ARAB CHURCH</h1>
                      <h2>ADMIN REGISTER DASHBOARD</h2>
                      <p class="fw-light mb-0"><em>Only Admin has access to this dashboard.</em> </p>
                    </div>
                  </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                  <div class="d-flex align-items-center px-4 px-lg-5 h-100">
                    <form class="register-form py-5 w-100" method="post" action="{{ route('register') }}">
                        @csrf
                      <div class=" mb-3">
                          <label class="label-material" for="register-username">Username</label>
                        <input class="form-control" type="text" name="name" required>
                      </div>
                      <div class=" mb-3">
                          <label class="label-material">Email Address</label>
                        <input class="form-control" type="email" name="email">
                        <div>
                            @error('email')
                          <p class="text-danger"> {{ $message }}
                            @enderror</p>
                          </div>
                      </div>
                      <div class=" mb-4">
                          <label class="label-material">Password</label>
                        <input class="form-control" type="password" name="password" required>
                      </div>
                      <div class="form-check mb-4">
                        <input class="form-check-input" id="register-agree" name="registerAgree" type="checkbox" required value="1" data-validate-field="registerAgree">
                        <label class="form-check-label form-label" for="register-agree">I agree with the terms and policy </label>
                      </div>
                      <button class="btn btn-primary mb-3" id="login" type="submit">Register</button><br><small class="text-gray-500">Already have an account? </small>
                      <a class="text-sm text-paleBlue" href="{{ route('login') }}">Login</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_assets/just-validate/js/just-validate.min.js') }}"></script>
    <script src="{{ asset('admin_assets/choices.js/scripts/choices.min.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('admin_assets/js/front.js') }}"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
