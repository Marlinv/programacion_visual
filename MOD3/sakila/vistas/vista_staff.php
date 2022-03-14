<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?></h3>

        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">staff_id</label>
                    <input type="text" name="staff_id" class="form-control">
                    <label for="">first_name</label>
                    <input type="text" name="first_name" class="form-control">
                    <label for="">last_name</label>
                    <input type="text" name="last_name" class="form-control">
                    <div class="mb-3">
                        <label for="address_id" class="form-label">address_id</label>
                        <select name="address_id" class="form-select">
                            <option>address_id</option>
                        </select>
                    </div>

                    <label for="">email</label>
                    <input type="text" name="email" class="form-control">
                    <label for="">store_id</label>
                    <input type="text" name="store_id" class="form-control">
                    <label for="">username</label>
                    <input type="text" name="username" class="form-control">
                    <label for="">password</label>
                    <input type="text" name="password" class="form-control">


                    <label for="update">last_update:</label>
                    <input type="date" id="update" name="last_update">

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
                                <th scope="col">staff_id</th>
                                <th scope="col">first_name</th>
                                <th scope="col">last_name</th>
                                <th scope="col">adress_id</th>
                                <th scope="col">email</th>
                                <th scope="col">store_id</th>
                                <th scope="col">active</th>
                                <th scope="col">username</th>
                                <th scope="col">password</th>
                                <th scope="col">last_update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT*FROM staff";
                            $buscador = $_GET['buscador'] ?? "";
                            if ($buscador != "") {
                                $query = "SELECT * FROM staff WHERE staff_id = '$buscador'";
                            }
                            $resultado = mysqli_query($conexion, $query);

                            if ($resultado) {
                                while ($fila = mysqli_fetch_object($resultado)) {
                                    $imagen = '<img src="data:image/jpeg;base64,' . base64_encode($fila->picture) . '"/>';
                                    echo " 
                        <tr>
                        <td>{$fila->staff_id}</td>
                        <td>{$fila->first_name}</td>
                        <td>{$fila->last_name}</td>
                        <td>{$fila->address_id}</td>
                        <td>{$imagen}</td>
                        <td>{$fila->email}</td>
                        <td>{$fila->store_id}</td>
                        <td>{$fila->active}</td>
                        <td>{$fila->username}</td>
                        <td>{$fila->password}</td>
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