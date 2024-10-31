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
            <label for="username">Cedula:</label>
            <input type="text" id="idcliente" name="idcliente" required>

            <label for="password">Nombre Completo:</label>
            <input type="password" id="nombrecompleto" name="nombrecompleto" required>

            <label for="password">Teléfono:</label>
            <input type="password" id="telefono" name="telefono" required>

            <label for="password">Correo:</label>
            <input type="password" id="correo" name="correo" required>

            <label for="password">Clave:</label>
            <input type="password" id="clave" name="clave" required>

            <button type="submit" class="btn-submit">Iniciar Sesión</button>
        </form>
        <p class="signup-link">¿No tienes cuenta? <a href="/signup">Regístrate aquí</a></p>
    </div>
</body>
</html>