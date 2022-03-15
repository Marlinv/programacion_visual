<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?></h3>

        <div class="row">
            <form class="col-6" method="post">
                <div class="mb-3">

                    <label for="">store_id</label>
                    <input type="text" name="store_id" class="form-control">
                    <label for="">first_name</label>
                    <input type="text" name="first_name" class="form-control">
                    <label for="">last_name</label>
                    <input type="text" name="last_name" class="form-control">
                    <label for="">email</label>
                    <input type="text" name="email" class="form-control">

                    <div class="mb-3">
                        <label for="address_id" class="form-label">address_id</label>
                        <select name="address_id" class="form-select">
                            <option>address_id</option>
                        </select>
                    </div>

                    <label for="">reate_date</label>
                    <input type="text" name="reate_date" class="form-control">

                    <label for="update">last_update:</label>
                    <input type="date" id="update" name="last_update">

                </div>
                <div class="mb-3">
                    <button name="boton-guardar" class="btn btn-primary">Guardar</button>
                </div>
            </form>

            <?php if (!empty($error)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>faled</strong>
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
                            <th scope="col">customer_id</th>
                            <th scope="col">store_id</th>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">email</th>
                            <th scope="col">address_id</th>
                            <th scope="col">active</th>
                            <th scope="col">reate_date</th>
                            <th scope="col">last_update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT*FROM customer";
                        $buscador = $_GET['buscador'] ?? "";
                        if ($buscador != "") {
                            $query = "SELECT * FROM customer WHERE first_name = '$buscador'";
                        }
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado) {
                            while ($fila = mysqli_fetch_object($resultado)) {
                                echo " 
                        <tr>
                        <td>{$fila->customer_id}</td>
                        <td>{$fila->store_id}</td>
                        <td>{$fila->first_name}</td>
                        <td>{$fila->last_name}</td>
                        <td>{$fila->email}</td>
                        <td>{$fila->address_id}</td>
                        <td>{$fila->active}</td>
                        <td>{$fila->create_date}</td>
                        <td>{$fila->last_update}</td>
                        </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

