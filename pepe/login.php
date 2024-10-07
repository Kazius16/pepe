<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/52cc069e19.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>WolfTech-LOGIN</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <style>
      /* Add this CSS to make the iframe cover the entire page */
      iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        border: none;
      }
    </style>
  </head>

  <body>
    <iframe
      src="fondoparticulas.php"
      frameborder="0"
      width="100%"
      height="100%"
    ></iframe>

    <div class="container">
      <div class="signin-signup">
        
        <!-- Formulario de inicio de sesión (Sign in) -->
        <form action="signin.php" method="POST" class="sign-in-form">
  <h2 class="title">Sign in</h2>
  <div class="input-field">
    <i class="fa-solid fa-user" style="color: #000000"></i>
    <!-- Aquí usamos el campo email -->
    <input type="email" name="email" placeholder="Email" required />
  </div>
  <div class="input-field">
    <i class="fa-solid fa-lock" style="color: #000000"></i>
    <input type="password" name="password" placeholder="Password" required />
  </div>
  <input type="submit" value="Login" class="btn" />
  <button class="btn">
            <a href="index.php">Volver al inicio</a>
          </button>
</form>





        
        <!-- Formulario de registro (Sign up) -->
        <form action="register.php" method="POST" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fa-solid fa-user" style="color: #000000"></i>
            <input type="text" name="username" placeholder="Username" required />
          </div>
          <div class="input-field">
            <i class="fa-solid fa-envelope" style="color: #000000"></i>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock" style="color: #000000"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <input type="submit" value="Sign up" class="btn" />
          <button class="btn">
            <a href="index.php">Volver al inicio</a>
          </button>
        </form>
        
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1>Ya tienes cuenta?</h1>
            <br /><br />
            <button class="btn" id="sign-in-btn">Sign in</button>
          </div>
          <img src="signin.svg" alt="" class="image" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1>¿Nuevo en WolfTech?</h1>
            <br><br>
            <p>
              Que esperas? <br />
              Da el primer paso.
            </p>
            <button class="btn" id="sign-up-btn">Sign up</button>
          </div>
          <img src="signup.svg" alt="" class="image" />
        </div>
      </div>
    </div>
    <script src="js/scriptlogin.js"></script> 

  </body>
</html>
