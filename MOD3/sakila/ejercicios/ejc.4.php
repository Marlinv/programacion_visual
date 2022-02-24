<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container w-50">
        <h5>Vamos a calcular la hipotenusa Triangulo</h5>

        <form action="" method="get">
            <div class="mb -3">
                <label for="">Vamos a Sumar</label>
                <input type="text" name="Suma" class="form-control">
            </div>
            </form>
        <br>
        <form action="" method="get">
            <div class="mb -3">
                <label for="">Vamos a Restar</label>
                <input type="text" name="Resta" class="form-control">
            </div>
        </form>
        <div class="mb -3">
            <button class="btn btn-primary">Calcular</button>
        </div>
        <?php
        print_r($_GET);
        ?>
    </div>
</body>
</html>