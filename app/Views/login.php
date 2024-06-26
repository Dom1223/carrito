
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="card shadow-lg form-signin">
            <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4">Iniciar sesión</h1>
                <form method="POST" action="<?= base_url('login/authenticate') ?>" autocomplete="off">

                    <div class="mb-3">
                        <label class="mb-2" for="user">Usuario</label>
                        <input type="text" class="form-control" name="user" id="user" required autofocus>
                    </div>

                    <div class="mb-3">
                        <div class="mb-2 w-100">
                            <label for="password">Contraseña</label>
                            <a href="link_request.html" class="float-end">
                                Olvide mi contraseña
                            </a>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Ingresar
                    </button>
                </form>

            </div>
            <div class="card-footer py-3 border-0">
                <div class="text-center">
                    ¿No tienes una cuenta? <a href="nuevo" class="text-dark">Registrate aquí</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>