<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="mb-3">
            <form class="col-6" method="post">
                <label for="city">Ingrese la pais</label>
                <input type="text" name="pais" class="form-control">
            </form>
        </div>

        <div class="mb-3">
            <select class="form-select" name="city_id">
                <option value="" selected>Selecione la pais</option>

                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                </div>
                <?php

                $query = "SELECT * FROM city";
                $resultado = mysqli_query($conexion, $query);

                if ($resultado) {
                    while ($fila = mysqli_fetch_object($resultado)) {
                        echo "<option value='$fila->country_id'>$fila->city</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

</html>