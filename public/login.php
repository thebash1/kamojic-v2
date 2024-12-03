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
                                <div class="mt-5 row justify-content-center align-items-center">
                                    <div class="col-sm-12 col-md-12">
                                        <label for="username" class="form-label">Usuario</label>    
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
                                        <label for="password" class="col-form-label">Contraseña</label>
                                        <div class="row">
                                            <div class="col">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                                            </div>
                                            <div class="col-2">
                                                <img id="showPassword" src="./src/assets/icons/key.png" alt="show-password" style="cursor: pointer;">
                                            </div>
                                        </div>
                                        <p class="mt-2">Debe estar entre 8 y 20 caracteres</p>   
                                    </div>    
                                </div>

                                <!-- botones -->
                                <div class="row my-3 justify-content-center align-items-center text-center">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-outline-primary w-100">Iniciar sesión</button>
                                        <a type="button" class="btn btn-outline-success text-decoration-none w-100 my-2" href="./register.php">Registrarme</a>
                                    </div>
                                </div>
                                <!-- botones -->
                            </div> 
                        </form>
                        <!-- formulario de login -->

                    </div>
                </div>
            </div>    
        </main>
        
        <footer></footer>
    </div>

    <script>
        let password = document.getElementById('password');
        let btnPassword = document.getElementById('showPassword');

        btnPassword.onclick = function(){
            if(password.type == "password"){
                password.type = "text";
            } else{
                password.type = "password";
            }
        }
    </script>
</body>
</html>