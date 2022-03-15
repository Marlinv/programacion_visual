<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?></h3>
        <div class="row">

            <form class="col-6" method="post">
                <input type="text" name="id" value="<?php echo $category_id ?? ''; ?>">
                <div class="mb-3">
                    <label for="">Ingrese la categoria</label>
                    <input value="<?php echo $name ?? ''; ?>" type="text" name="categoria" class="form-control">
                </div>
                <div class="mb-3">
                    <button name="boton-guardar" class="btn btn-primary">Guardar</button>
                </div>
            </form>

            <div class="row">
                <form class="col-4">
                    <div class="input-group mb-3">
                        <input type="text" name="buscador" class="form-control" placeholder="Buscador">
                        <button class="btn btn-outline-secondary" type="submit" name="boton-buscar">Buscar</button>
                    </div>
                </form>

                <?php if (!empty($error)) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong></strong>

                        <?php echo $error; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (!empty($error)) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong></strong>

                        <?php echo $error; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">category_id</th>
                                <th scope="col">name</th>
                                <th scope="col">last_update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT*FROM category";
                            $buscador = $_GET['buscador'] ?? "";
                            if ($buscador != "") {
                                $query = "SELECT * FROM category WHERE name = '$buscador'";
                            }
                            $resultado = mysqli_query($conexion, $query);

                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo " 
                        <tr>
                        <td>{$fila->category_id}</td>
                        <td>{$fila->name}</td>
                        <td>{$fila->last_update}</td>
                            <td>
                        <a href='{$_SERVER['PHP_SELF']}?editar=$fila->category_id'>Editar</a>
                        <a href='{$_SERVER['PHP_SELF']}?eliminar=$fila->category_id'>Eliminar</a>
                            </td>
                        </tr>";
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

