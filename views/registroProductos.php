<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="../public/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

</head>

<body class="fondo">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand letra" href="../index.php"> <img src="../public/img/oficial.png"
                        alt="logo tienda" width="70" height="45">SUMILA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active letra" aria-current="page" href="registroUsuarios.php">REGISTRAR
                                USUARIOS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active letra" href="registroProductos.php">REGISTRO PRODUCTOS</a>
                        </li>
                    </ul>
                    </li>
        </nav>
    </header>

    <main>
        <h3 class="text-center mt-2">REGISTRO PRODUCTOS</h3>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class=" col-12 col-md-5">
                    <form class="border border-dark mt-3 p-4" action="../controllers/productosControl.php"
                        method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre producto</label>
                            <input type="text" class="form-control" name="nombresProducto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Marca producto</label>
                            <input type="text" class="form-control" name="marcaProducto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio producto</label>
                            <input type="text" class="form-control" name="precioProducto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fotografia producto</label>
                            <input type="text" class="form-control" name="fotoProducto">
                            <img class="img-fluid naci mt-3" src="../public/img/elements.jpeg" alt="imagen">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripcion producto</label>
                            <textarea class="form-control" name="descripcionProducto" placeholder=""
                                id="floatingTextarea"></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-dark w-100" name="recoleccionProducto">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>