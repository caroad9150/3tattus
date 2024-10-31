<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/css/general.css">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Iniciar Sesión</h1>
    </header>
    <div class="container">
        <form action="/login" method="post" class="login-form">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn-submit">Iniciar Sesión</button>
        </form>
        <p class="signup-link">¿No tienes cuenta? <a href="/signup">Regístrate aquí</a></p>
    </div>
</body>
</html>
