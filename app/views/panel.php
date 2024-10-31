<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">
                                <span data-feather="home"></span>
                                Panel de Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <span data-feather="file"></span>
                                Artículos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <span data-feather="users"></span>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <span data-feather="layers"></span>
                                Configuración
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Panel de Control</h1>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Usuarios</h5>
                                <p class="card-text">Gestiona los usuarios del sistema.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Artículos de la tienda</h5>
                                <p class="card-text">Administra los artículos de la tienda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Galería</h5>
                                <p class="card-text">Administrar las fotos de la galería.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Perfiles de artistas</h5>
                                <p class="card-text">Administrar los artistas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Testimonios</h5>
                                <p class="card-text">Ver testimonios.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Cuidados</h5>
                                <p class="card-text">Administrar los cuidados.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Valoraciones</h5>
                                <p class="card-text">Ver las valoriaciones de los artistas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Tarjetas</h5>
                                <p class="card-text">Administrar las tarjetas de regalo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Ofertas y promociones</h5>
                                <p class="card-text">Administrar las ofertas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Membrecías </h5>
                                <p class="card-text">Administrar las Membrecías.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Reportes de ventas</h5>
                                <p class="card-text">Ver las ventas por mes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Agendas</h5>
                                <p class="card-text">Ver las citas de todos los artistas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <h2>Últimas Acciones</h2>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Acción</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>El usuario 'admin' inició sesión</td>
                                <td>31-10-2024 17:50</td>
                            </tr>
                            <tr>
                                <td>Artículo 'Acuerdos' actualizado</td>
                                <td>22-10-2024</td>
                            </tr>
                            <tr>
                                <td>Nuevo artículo 'Tatuajes' añadido</td>
                                <td>22-10-2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
