<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="contenedor container-fluid pt-5 d-flex justify-content-center min-vh-100">
        <div class="formulario d-flex flex-column justify-content-center rounded p-4">
            <div class="imgLogo mb-3">
                <img src="../public/imgs/logo.png" alt="">
            </div>
            <form action="" method="get">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario">
                  </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="password">
                </div>
                <div class="container-fluid d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <button type="text" class="btn btn-success"><a href="/Laravel/biblioteca/public/registro" style="text-decoration: none; color:white;">Registrarse</a></button>
                </div>            
            </form>
        </div>
    </div>
</body>

</html>