<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- METADATOS -->
        <meta charset="UTF-8">
        <meta name="author" content="Deviu System">
        <meta name="descripcion" content="Aplicativo web Valiny">
        <meta name="keywords" content="HTML, CSS, JavaScript, React">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- TITULO -->
        <title>Aplicativo web | Valiny</title>
    
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="../../images/codigo-qr.png">
    
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
        <!-- CSS -->
        <link rel="stylesheet" href="../../css/style.css">
    </head>
<body>
    <!-- NAVEGACION MODIFICADA -->
<nav class="navbar navbar-expand-md bg-body py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#"><span>INICIO</span></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Optimizacion_Asistencia.php"><i class="bi bi-gear"></i> Optimización de Asistencia</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Escolar.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Escolar</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Comedor.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Comedor</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Justificada.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Justificada</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="bi bi-file-earmark-bar-graph"></i> Reportes de Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Registro_Curso.php"><i class="bi bi-file-earmark-text"></i> Registro de Cursos</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Justificada.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Justificada</a></li>
                        <li><a class="dropdown-item" href="Asistencia_Aulas.php"><i class="bi bi-calendar-check"></i> Registro de Asistencia: Aulas</a></li>
                    </ul>
                </li>
            </ul>
            <a class="nav-link btn btn-primary ms-md-2" href="Ingreso.php" role="button"><i class="bi bi-door-open"></i> Salir</a>
        </div>
    </div>
</nav>

    <!-- TITULO DEL ADMINISTRADOR -->
    <div class="container mt-4">
        <h3 class="text-center">Registro de Asistencia: Aulas</h3>
    </div>

    <!-- Gráficos -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Asistencia Mensual</h5>
                    <!-- Inserta aquí el gráfico de asistencia mensual -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Asistencia por Curso</h5>
                    <!-- Inserta aquí el gráfico de asistencia por curso -->
                </div>
            </div>
        </div>

        <!-- Lista de Cursos -->
        <div class="mt-4">
            <h4>Lista de Cursos</h4>
            <ul>
                <li>Curso 1</li>
                <li>Curso 2</li>
                <li>Curso 3</li>
                <!-- Agrega dinámicamente la lista de cursos desde la base de datos -->
            </ul>
        </div>
    </div>

    <!-- CALENDARIO -->
    <div class="container mt-4">
        <!-- Aquí puedes incluir un calendario interactivo para llevar un registro de la asistencia en las aulas -->
    </div>

    <!-- Objetivo de Asistencia -->
    <div class="mt-4">
        <h4>Objetivo de Asistencia</h4>
        <p>El objetivo de la asistencia es garantizar que todos los estudiantes asistan a sus clases de manera regular para obtener un rendimiento académico óptimo. Para el presente año académico, se espera que los estudiantes alcancen una asistencia del 95% o superior.</p>
        <p>La asistencia regular es fundamental para el aprendizaje y el desarrollo de los estudiantes, y contribuye al éxito en sus estudios.</p>
    </div>

    <!-- Botones de Acción -->
    <div class="mt-4">
        <button type="button" class="btn btn-primary">Exportar Informe</button>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
