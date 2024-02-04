<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    @font-face {
    font-family: Sixtyfour-Regular;
    src: url(./static/Sixtyfour-Regular.ttf);
}
div{
    
    font-family: Sixtyfour-Regular;
    font-size: x-small;
}

.btn,.text {
  
  font-family: Sixtyfour-Regular;
    font-size: x-small;
}
  </style>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
  <form>
    <div>
    <img class="mb-4 align-items-center d-flex justify-content-center ">
    <h1 class="d-flex justify-content-center">Please sign in</h1>
  </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <!-- Button trigger modal -->
    <h6 class="text">cant sign-in?,<button type="button" class="btn txt-dark" data-bs-toggle="modal" data-bs-target="#modalregister">
      register now</button> </h6>
    

<!-- Modal register -->
<div class="modal fade" id="modalregister" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Register</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-floating">
          <input type="name" class="form-control" id="floatingInput" placeholder="" required>
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm">register</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal register -->
<div class="modal fade" id="confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-title"></div>
    <div class="modal-body d-flex justify-content-center"><p>
        Register succsess !!!!
    </p></div>
  </div>
  </div>
</div>  

</form>
</main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  
  </style>
</html>