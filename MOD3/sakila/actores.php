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
                        $query = "SELECT*FROM actor";
                        $resultado = mysqli_query($conexion, $query);

                        if ($resultado){ 
                            while ($fila = mysqli_fetch_assoc($resultado)){ 
                                echo"
                                <td>${fila</td>
                                <td>${()</td>
                                <td>${()</td>
                                <td>${()</td>
                                <td>${()</td>
                                ";
                                {
                        }

                        ?>

                        <tr>

                        </tr>

                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Penelope</td>
                            <td>GUINESS</td>
                            <td>2006-02-15 04:34:33</td>

                            <td>NICK</td>
                            <td>WAHLBERG</td>
                            <td>2006-02-15 04:34:33</td>                            

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </div>



    <?php require_once "parte_footer.php"; ?>
</body>

</html>