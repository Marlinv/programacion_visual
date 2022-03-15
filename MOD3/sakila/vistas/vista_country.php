<?php require_once "parte_head.php"; ?>

<body>

    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?> </h3>

        <div class="mb-3">
            <form class="col-6" method="post">
                <label for="city">Ingrese la ciudad</label>
                <input type="text" name="country" class="form-control">
            </form>
        </div>

        <div class="mb-3">
            <select class="form-select" name="city">
                <option value="" selected>Selecione la ciudad</option>

                <div class="mb-3">
                    <button class="btn btn-primary" name="boton-guardar">Guardar</button>
                </div>
                <?php

                $query = "SELECT * FROM country";
                $resultado = mysqli_query($conexion, $query);

                if ($resultado) {
                    while ($fila = mysqli_fetch_object($resultado)) {
                        echo "<option value='$fila->country_id'>$fila->country</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

</html>