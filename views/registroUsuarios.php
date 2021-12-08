<?php

if(!isset($_SESSION)){
        session_start();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="../public/registro.css">
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
                <a class="navbar-brand letra " href="../index.php"> <img src="../public/img/sumila.png" alt="logo tienda"
                        width="20" height="35">  SUMILA</a>

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
                                <img src="../public/img/shopping.png" alt="logo tienda"
                                width="30" height="30">   
                            </a>
                            <ul class="dropdown-menu"aria-labelledby="navbarDropdown"  >
                                <li class="dropdown-item">
                                    <a class="nav-link active letra  " aria-current="page" href="listaEmpleado.php">Empleados</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link active letra " href="listaProducto.php">Productos</a>
                                </li>
                            </div>

                            <div>
                                <a class="navbar-brand nav-link  letra" href="#" id="navbarDropdown" role="button"data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../public/img/user2.png" alt="logo tienda"
                                    width="35" height="35">  
                                </a>
                                <ul class="dropdown-menu"aria-labelledby="navbarDropdown"  >
                                <li class="dropdown-item">
                                    <a class="nav-link active letra  " aria-current="page" href="registroUsuarios.php">REGISTRATE</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link active letra " href="registroProductos.php">REGISTRA PRODUCTO</a>
                                </li>
                            </div>
                        </ul>                    
                    </div>  

        </nav>

    </header>

    <main>
        <h3 class="  text-center mt-4 registro ">CREATE UNA CUENTA</h3>
        
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class=" col-12 col-md-6">
                    <form class="  p-4" action="../controllers/empleadosControl.php"
                        method="POST">
                        <div class="row">
                            <div class="col mb-3 letrasMenu">
                                <label class="form-label letra">Nombre</label>
                                <input type="text" class="border border-dark form-control fondoinput" name="nombres">
                            </div>
                            <div class=" col mb-3 letrasMenu">
                                <label class="form-label">Apellidos</label>
                                <input type="text" class="border border-dark form-control fondoinput" name="apellidos">
                            </div>
                        </div>

                        <div class="row">
                        <div class="col mb-3 letrasMenu">
                            <label class="form-label">Email</label>
                            <input type="text" class="border border-dark form-control fondoinput" name="email">
                        </div>
                        <div class="col mb-3 letrasMenu">
                            <label class="form-label ">Edad</label>
                            <input type="text" class="border border-dark form-control fondoinput" name="edad">
                        </div>
                        </div>
                        
                        <div class="mb-3 letrasMenu ">
                            <label class="form-label">Descripcion</label>
                            <textarea class="border border-dark form-control fondoinput" name="descripcion" placeholder=""
                                id="floatingTextarea"></textarea>
                        </div>
                        <div class="mb-3 letrasMenu">
                            <label class="form-label">Fotografia</label>
                            <input type="text" class="border border-dark form-control fondoinput" name="foto">
                            
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" >
                            <label>Acepta</label>
                        </div>

                        <div class=" botonCenter">
                        <button type="submit" class="btn btn-outline-dark w-100 " name="recoleccion">Registrar</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>

        
    </main>

    <section>
        <?php if(isset($_SESSION['mensaje'])): ?>
            <div class="modal fade" id="modal" tabindex="-1" >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="exampleModalLabel">SUMILA</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5><?php echo($_SESSION['mensaje'])?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php unset($_SESSION['mensaje'])?>
        <?php endif ?>
    </section>

     <div class="container-fluid mt-5">
      <footer>
        <hr>
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

    <script type="module" src="../public/js/lanzarmodal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>