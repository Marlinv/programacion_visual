<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?></h3>

        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">Ingrese el titulo de la pelicula</label>
                    <input type="text" name="title" class="form-control">
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

            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">film_id</th>
                                <th scope="col">title</th>
                                <th scope="col">description</th>
                                <th scope="col">release_year</th>
                                <th scope="col">language_id</th>
                                <th scope="col">original_language_id</th>
                                <th scope="col">rental_duration</th>
                                <th scope="col">rental_rate</th>
                                <th scope="col">length</th>
                                <th scope="col">eplacement_cost</th>
                                <th scope="col">rating</th>
                                <th scope="col">special_features</th>
                                <th scope="col">last_update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT*FROM film";
                            $buscador = $_GET['buscador'] ?? "";
                            if ($buscador != "") {
                                $query = "SELECT * FROM film WHERE title = '$buscador'";
                            }
                            $resultado = mysqli_query($conexion, $query);

                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    echo " 
                        <tr>
                        <td>{$fila->film_id}</td>
                        <td>{$fila->title}</td>
                        <td>{$fila->description}</td>
                        <td>{$fila->release_year}</td>
                        <td>{$fila->language_id}</td>
                        <td>{$fila->original_language_id}</td>
                        <td>{$fila->rental_duration}</td>
                        <td>{$fila->rental_rate}</td>
                        <td>{$fila->length}</td>
                        <td>{$fila->replacement_cost}</td>
                        <td>{$fila->rating}</td>
                        <td>{$fila->special_features}</td>
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
    <?php require_once "parte_footer.php"; ?>
</body>

