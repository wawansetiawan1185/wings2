<!doctype html>
<html lang="en">
  <head>
    <title>Wings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{url('filelogin/css/style.css')}}">

    </head>
    <body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Wings</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(filelogin/images/wings.jpg);">
                  </div>
                        <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Daftar</h3>
                        </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                    </div>
                            <form class="signin-form"action="{{URL::to('/simpandata')}}" method="POST">
                                     {{ csrf_field() }} 
                        <div class="form-group mb-3">
                            <label class="label" for="name">User</label>
                            <input type="text" name="user" class="form-control" placeholder="Username" required>
                        </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Password</label>
                      <input type="password" name="password"class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
                    </div>
                    <div class="form-group d-md-flex">
                        
                                    
                    </div>
                  </form>
                  <p class="text-center">Sudah Punya Akun? <a href="{{url('/')}}">Login</a></p>
                </div>
              </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{url('filelogin/js/jquery.min.js')}}"></script>
  <script src="{{url('filelogin/js/popper.js')}}"></script>
  <script src="{{url('filelogin/js/bootstrap.min.js')}}"></script>
  <script src="{{url('filelogin/js/main.js')}}"></script>

    </body>
</html>

