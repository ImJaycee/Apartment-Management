<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">
  <div class="row justify-content-center align-items-center text-center" style="height: 100vh;">
    <div class="col-12 col-md-5 col-lg-4">
    <h1 class="text-primary mb-5">Apartment Management System</h1>
      <!-- Login Form -->
      <div class="card transparent-card" style="height: 24rem;">
      <div class="card-body">         
        <form>
          <h2 class="text-center mb-2">Welcome</h2>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          
          <button type="submit" class="btn mt-5 mb-3 btn-primary" style="width: 100%; height: 50px; font-size: 20px;">Login</button>
          <div class="mb-2 mt-2 form-reset">
            <a href="#">Forgot Password?</a>
          </div>
        </form>
      </div>
</div>

      <!-- Login Form End -->
    </div>
  </div>
</div>


  


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>