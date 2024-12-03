<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../public/src/assets/icons/login.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-father">
        <header></header>
        
        <main>
            <div class="container">
                <div class="row justify-content-center align-items-center vh-100 flex-grow-1">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <h2 class="text-center">Login</h2>

                        <!-- formulario de login -->
                        <form action="../app/controllers/login.php" method="POST">
                            <div class="form mb-3">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Usuario"><br>

                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                            </div>
                            <div class="col justify-content-center align-items-center text-center">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-outline-primary">Iniciar sesión</button>
                                </div>
                                <div class="mb-3">
                                    <a type="button" class="btn btn-outline-success text-decoration-none text-body" href="./register.php">Registrase</a>
                                </div>
                            </div>
                        </form>
                        <!-- formulario de login -->

                    </div>
                </div>
            </div>    
        </main>
        
        <footer></footer>
    </div>
</body>
</html>