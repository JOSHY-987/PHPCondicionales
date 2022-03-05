<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Test Control AJAX</title>
    <?php require_once "Menu.php"?>
</head>

<body>

    <br>

    <div class="container">
        <div class="justify-content-center">
            <div class="col-sm-6 p-5 bg-white shadow-lg rounded">
                <form method="POST">
                    <h2>Sentencia IF</h2>

                    <hr>
                    <p>Mostrar Si El Numero Ingresado Es Mayor Que 10.</p>
                    <div class="form-group">
                        <label for="numeroif">Numero</label>
                        <input id="numeroif" class="form-control" type="float" name="numeroif">
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <button class="btn btn-primary" id="mostrarif" type="button">Mostrar Resultado</button>
                    </div>

                    <br>
                    <div id="Msg1"></div>

                </form>
            </div>

            <br>
            <br>
            <br>

            <div class="col-sm-6 p-5 bg-white shadow-lg rounded">
                <form method="POST">
                    <h2>Sentencia ELSE-IF</h2>

                    <hr>
                    <p>Mostrar El Mayor De 2 Numeros.</p>

                    <div class="form-group">
                        <label for="numero1">Numero 1</label>
                        <input id="numero1" class="form-control" type="float" name="numero1">
                    </div>

                    <div class="form-group">
                        <label for="numero2">Numero 2</label>
                        <input id="numero2" class="form-control" type="float" name="numero2">
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <button class="btn btn-primary" id="mostrarelseif" type="button">Mostrar Resultado</button>
                    </div>

                    <br>
                    <div id="Msg2"></div>

                </form>
            </div>

            <br>
            <br>
            <br>

            <div class="col-sm-6 p-5 bg-white shadow-lg rounded">
                <form method="POST">
                    <h2>Sentencia SWICHT</h2>

                    <hr>
                    <p>Mostrar El Dia De La Semana Segun El Numero Ingresado.</p>
                    <div class="form-group">
                        <label for="numerodia">Numero</label>
                        <input id="numerodia" class="form-control" type="float" name="numerodia">
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <button class="btn btn-primary" id="mostrarswicht" type="button">Mostrar Resultado</button>
                    </div>

                    <br>
                    <div id="Msg3"></div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="Ajax/Funcion.js"></script>
</body>

</html>