<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./src/assets/icons/reset-password.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-father">
        <header></header>
        
        <main>
            <div class="container">
                <h1 class="my-3">Bienvenido a recuperar tu contraseña</h1>
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="password" class="form-control" id="email" name="email" placeholder="Correo">
                                <div id="emailHelp" class="form-text">Escribe tu correo registrado.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar código</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    
        <footer></footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>