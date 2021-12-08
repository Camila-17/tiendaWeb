<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMILA</title>
    <link rel="stylesheet" href="public/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>

<body class="fondo">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " style="background:#BDBDBD;">
            <div class="container-fluid">
                <a class="navbar-brand letra " href="index.php"> SUMILA <img src="public/img/dinoLogo.png" alt="logo tienda "width="55" height="35"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <ul class="nav justify-content-center  ">
                    <li class="nav-item ">
                        <a class=" navbar-brand nav-link disabled  letra " href="#">MUJER</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand nav-link disabled letra">HOMBRE</a>
                    </li>
                </ul>

                <div class="nav-item dropstart">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div>
                            <a class="navbar-brand nav-link  letra" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="public/img/shopping.png" alt="logo tienda" width="25" height="25"></a>
                            <ul class="dropdown-menu"aria-labelledby="navbarDropdown"  >
                                <li class="dropdown-item">
                                    <a class="nav-link active letra  " aria-current="page" href="views/listaEmpleado.php">Empleados</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link active letra " href="views/listaProducto.php">Productos</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a class="navbar-brand nav-link  letra" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="public/img/user2.png" alt="logo cara"width="25" height="25">  
                            </a>
                            <ul class="dropdown-menu"aria-labelledby="navbarDropdown"  >
                                <li class="dropdown-item">
                                    <a class="nav-link active letra  " aria-current="page" href="views/registroUsuarios.php">REGISTRATE</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link active letra " href="views/registroProductos.php">REGISTRA PRODUCTO</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>  
        </nav> 
    </header>

    <main>

        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 col-md-4 mt-3">
                    <div class="row">
                        <img class="imagenUno" src="public/img/todosLogos.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <div class="row">
                        <p class="letra text-center muevete">"Hazlo, y si te da miedo hazlo con miedo"</p>
                        <img class="agua" src="public/img/Agua.jpg"  alt="prueba">
                    </div>        
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <div class="row">
                        <img class="aire" src="public/img/Aire.jpg"  alt="prueba">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="row">
                        <img class="tierra" src="public/img/Tierra.jpg"  alt="prueba">
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="row">
                        <img class="fuego" src="public/img/Fuego.jpg"  alt="prueba">
                    </div> 
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <img class="imagenDos" src="public/img/diseños.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container-fluid mt-5">
        <footer>
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="sumilaF" src="public/img/sumila.png" alt="">
                </div>
                <div class=" cont2 col-12 col-md-6">     
                    <p class="text-center in1">&copy; Sumila</p>
                    <a href="https://www.linkedin.com/in/mar%C3%ADa-camila-duran-49baa6211/" target="_BLANK"><img src="img/in.png" alt="" class="oli "></a>
                    <p class="in1 text-center">&#9742;3196244642</p>
                </div>
            </div>
        </footer>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>
</html>