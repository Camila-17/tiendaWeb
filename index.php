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
                <a class="navbar-brand letra " href="index.php"> <img src="public/img/sumila.png" alt="logo tienda"
                        width="20" height="35">  SUMILA</a>

                    <ul class="nav justify-content-center  ">
                        <li class="nav-item">
                            <a class=" navbar-brand nav-link disabled  letra" href="#">MUJER</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand nav-link disabled letra">HOMBRE</a>
                        </li>
                    </ul>

                    <div class="nav-item dropstart">
                        
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <div>
                                <a class="navbar-brand nav-link  letra" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="public/img/shopping.png" alt="logo tienda"
                                width="30" height="30">   </a>
                            </div>
                        <a class="navbar-brand nav-link  letra" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="public/img/user2.png" alt="logo tienda"
                        width="35" height="35">  
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
        </nav>
        
    </header>

    <main>
        
        <div class="container-fluid">
            <h5 class="text-center titulo mt-2">¡EY BIENVENIDO!</h5>
            <div class="row">
                <div class=" col-12 col-md-3 mt-1 one1 ">
                    <img src=" public/img/water.jpeg" class="d-block" alt=" imagen">
                </div>
                <div class=" col-12 col-md-3  mt-1 one2 ">
                    <img src=" public/img/air.jpeg" class="d-block" alt=" imagen">
                </div>
                <div class=" col-12 col-md-2  mt-1 one3 ">
                    <img src=" public/img/fire.jpeg" class="d-block" alt=" imagen">
                </div>
                <div class=" col-12 col-md-4  mt-1 one4 ">
                    <img src=" public/img/earth.jpeg" class="d-block" alt=" imagen">
                </div>
            </div>
        </div>
    </main>










    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>