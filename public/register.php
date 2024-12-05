<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="../public/src/assets/icons/register.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container-father">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100 flex-grow-1">
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <form action="../app/controllers/login.php" method="POST">
                        <h1 class="text-center my-3">Registro</h1>
                        <div class="mb-3">
                            <label for="fname" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Nombres">
                        </div>
                        <div class="mb-3">
                            <label for="lname" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Apellidos">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplocorreo23@gmail.com">
                            <div id="emailHelp" class="form-text">No compartiremos tu correo con nadie más.</div>
                        </div>
                        <div class="mb-3">
                            <label for="regdate" class="form-label">Fecha de registro</label>
                            <input type="text" class="form-control" id="regdate" name="regdate" placeholder="Registro automático" disabled>
                        </div>
                        <div class="row mb-3 justify-content-center align-items-center">
                            <div class="col">
                                <label for="age" class="form-label">Edad</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Escriba su edad">
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="masculino" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Masculino
                                    </label>
                                    </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="femenino">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <button type="submit" class="btn btn-success w-50 my-3">Registrarme</button>
                        </div>
                        <div class="row">
                            <div class="col mb-5 text-center">
                                <a href="./login.php" class="text-decoration-none">¿Tienes una cuenta?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>