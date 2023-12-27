<!DOCTYPE html>
<html lan="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
      <?php require "partials/_nav.php"?>
      <div class="container">
        <h1 class="text-center">Welcome to login page</h1>
        <form action="/loginsystem/login.php" method="post" style="display:flex; flex-direction:column; align-items:center;">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" name="username" aria-describedby="usernameHelp">
          </div>
          <div>
            <label for="password" class="form-label">Password</label>
            <input type="text" id="password" name="password" aria-describedby="passwordHelp">
          </div>
          <button type="Login" class="btn btn-primary">Login</button>
        </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>




<!-- <form action="/loginsystem/signup.php" method="post" style="display:flex; flex-direction:column; align-items:center">
            <div class="mb-3 col-md-3">
                <label for="username" style="display:block; text-align:left;" class="form-label">Username</label>
                <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3 col-md-3">
                <label for="password" style="display:block; text-align:center;" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-3">
                <label for="cpassword" style="display:block; text-align:right;" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="cpasswordHelp" class="form-text">Make sure to type the same password.</small>
            </div>

            <button type="submit" class="btn btn-primary">SignUp</button>
        </form> -->