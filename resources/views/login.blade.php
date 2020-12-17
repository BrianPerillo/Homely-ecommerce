@extends("plantilla")

@section("titulo")
  Iniciar Sesión
@endsection

@section("principal")
  <?php
  require_once 'func/controller.php';
  if (isLoged()) {
    header('location: profile.php');
    exit;
  }
  $vpass = "";
  if ($_POST) {
      $emailFromPost = trim($_POST['email']);
      $passFromPost = trim($_POST['password']);

      if (validateLogin($emailFromPost, $passFromPost)) {
    //-- SI VALIDO- VEO COOKIE- LOGUEO Y REDIRIJO --
          // almaceno la cookie
          if (isset($_POST['remember-me'])) {
              setcookie('userEmail', $emailFromPost, time() + 3600);
            }
          // Logueo y redirecciono
          //$userDB = searchUser($emailFromPost);
          $userDB = getByEmail($emailFromPost);
          login($userDB);
          header('location: profile.php');
          exit;
      } else {
          $vpass = "<br> Error de credenciales <br>";
          }
    -- ---------------------------------------- --
  }


  // echo "<pre>";
  // var_dump($_SESSION);
  // echo "</pre> <br>";
  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre> <br>";
  // echo $userDB;
  // echo "<pre>";
  // var_dump($userDB);
  // echo "</pre>";
  // echo "{$_POST['email']} <br>";

  ?>
    <section class="form-container">
      <h2>Iniciar Sesión</h2>
      <form class="access-form" action="" method="post">
        <div class="field-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="" required class="<?php echo $vpass != "" ? "error" : null ?>">
        </div>
        <div class="field-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" value="" required class="<?php echo $vpass != "" ? "error" : null ?>">
          <em class="form-error-validate"><?php echo $vpass?></em>
        </div>
        <div class="remember-me">
          <input type="checkbox" id="remember-me" name="remember-me" value="">
          <label for="remember-me">Recordarme</label>
        </div>
        <a href="#" class="login-links">¿Olvidaste tu contraseña?</a>
        <div class="login-button">
          <button type="submit" name="send">INGRESAR</button>
        </div>
        <a href="register.php" class="login-links">Crear cuenta</a>
      </form>
    </section>
    <hr>
    @endsection
  </body>
</html>
