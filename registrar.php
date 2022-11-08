<?php

include("con_db.php");

if (isset($_POST['register'])) {

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
?>
            <h3 class="ok">Te registraste correctamente</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">Ups ha ocurrido un error</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">Complete los datos</h3>
<?php
    }
}

?>