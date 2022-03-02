<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?></h3>

        <div class="row">
            <div class="col-6">
                aqui va el formulario
            </div>
        </div>

        <div class="row">
            <form class="col-4">
                <div class="input-group mb-3">
                    <input type="text" name="buscador" class="form-control" placeholder="Buscador">
                    <button class="btn btn-outline-secondary" type="submit" name="boton-buscar">Buscar</button>
                </div>
            </form>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <thead>
                    <tbody>
                        <?php
                        $query = "SELECT*FROM store";
                        $buscador = $_GET['buscador']??"";
                        if ($buscador !=""){
                            $query = "SELECT * FROM store WHERE store_id = '$buscador'";
                        }
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado){ 
                            while ($fila = mysqli_fetch_object($resultado)) {
                            echo " 
                        <tr>
                        <td>{$fila->store_id}</td>
                        <td>{$fila->manager_staff_id}</td>
                        <td>{$fila->address_id}</td>
                        <td>{$fila->last_update}</td>
                        </tr>"; 
                        }
                    } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </thead>
        </table>
        </div>
    </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

</html>