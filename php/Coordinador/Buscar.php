<?php
include 'Inicio.php';

$ID_Estudiante = $_POST["ID_Estudiante"];

include 'Conexion.php';

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

// SI NO SE HA CONECTADO A LA BD
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BD :c";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD :c");
mysqli_set_charset($conexion, "utf8");

$consulta = "select * from Vista_estu where Documento = '$ID_Estudiante'";
$resultados = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_row($resultados)) {
    ?>
    <div class="container mt-4">
        <div class="mb-3">
            <label for="nombreEstudiante" class="form-label">Nombre del Estudiante: <?php echo $fila[0]; ?></label>
            <label for="documentoEstudiante" class="form-label">Tipo Documento: <?php echo $fila[1]; ?></label>
            <label for="grupoEstudiante" class="form-label">Numero Documento: <?php echo $fila[2]; ?></label>
            <label for="cursoEstudiante" class="form-label">Curso: <?php echo $fila[3]; ?></label>
        </div>
    </div>

    <div class="container mt-4">
        <h2>Registro del estudiante</h2>
        <div class="mb-3">
            <form action="Registra.php" method="post">

                <div class="mb-3">
                    <label for="codigoEstudiante" class="form-label">Código del Estudiante</label>
                    <input type="text" class="form-control" id="codigoEstudiante" placeholder="Ingrese el código del estudiante" name="ID_Estu">
                </div>
                <input type="radio" name="Registro" value="Falla" id="">Falla <br>
                <input type="radio" name="Registro" value="Asiste" id="">Asiste <br>
                <input type="radio" name="Registro" value="Retardo" id="">Retardo <br>
                <input type="radio" name="Registro" value="Evasion" id="">Evasion <br>
                <input type="radio" name="Registro" value="Justificada" id="">Falla Justificada <br>

                <button type="submit" class="submit-btn">Registrar asistencia</button>
            </form>
        </div>
    </div>
<?php
}
?>
