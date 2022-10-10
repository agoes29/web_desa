<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="{{asset('assets/style/style.css')}}"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
    />

    <title>Login</title>
</head>
<body>

    <!-- =============Header============== -->
    <header id="header" class="fixed-top d-flex align-items-center header-scrolled bg-success">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="imageLogo" src="assets/images/Asset 2.png" alt="" />
                <h4>Desa Buahan</h4>
            </a>
            <button class="navbar-toggler navbar-color" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
                <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        Desa Buahan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#profil">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

    <!-- ========== hero section=============== -->

<main class="form-signin">
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-7 col-xl-4">
              <img src="assets/images/Asset 2.png"
                class="img-fluid" id="logo-login" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            
            <!-- <form>
              
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

          
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
     
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <a href="/admin"><button type="button" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button></a>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                      class="link-danger">Register</a></p>
                </div>

              </form> -->
            </div>
          </div>
        </div>
      </section>

</main>
<div class="footer fixed-bottom d-flex footer-wrap container-fluid text-white p-1 text-start bg-success">
            <div class="container d-flex flex-wrap justify-content-between align-items-center py-2 my-2">
                <p class="m-0">@copyright  <a href="https://www.buahandesaku.com/"> Buahan Desaku</a> | INSTIKI</p>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <!-- link instagram -->
                        <li class="ms-3"><a class="text-muted" href="#"></a>
                            <img class="social-media" src="assets/images/instagram.svg" alt="">
                        </li>
                        <!-- link youtube -->
                        <li class="ms-3"><a class="text-muted" href="#"></a>
                            <img class="social-media" src="assets/images/youtube.svg" alt="">
                        </li>
                        <!-- link facebook -->
                        <li class="ms-3"><a class="text-muted" href="#"></a>
                            <img class="social-media" src="assets/images/facebook.svg" alt="">
                        </li>
                        <!-- link tiktok -->
                        <li class="ms-3"><a class="text-muted" href="#"></a>
                            <img class="social-media" src="assets/images/tiktok.svg" alt="">
                        </li>
                </ul>
            </div>
        </div>
<!-- JavaScript -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
