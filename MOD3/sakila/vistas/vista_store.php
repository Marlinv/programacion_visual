<?php require_once "parte_head.php"; ?>

<body>
    <?php require_once "parte_menu.php"; ?>

    <div class="container">
        <h3> <?php echo $pagina; ?></h3>

        <select class="form-select" name="address_id" aria-label="Default select example">
        <option selected>Selecione el direccion</option>
        </select>
            <br>
            <select class="form-select" name="manager_staff_id" aria-label="Default select example">
                <option selected>Seleccione el manager_staff_id</option>
            </select>
            <?php if (!empty($error)): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong></strong>
    <?php echo $error; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif; ?>
        </div>
    </div>
    <?php require_once "parte_footer.php"; ?>
</body>

</html>