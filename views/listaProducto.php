<?php
    include("../controllers/listadoProductosControlador.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/listaProducto.css">
</head>

<body class="fondo">
<header>
    <nav class="navbar navbar-expand-lg navbar-light " style="background:#BDBDBD;">
            <div class="container-fluid">
                <a class="navbar-brand letra " href="../index.php"> <img src="../public/img/sumila.png" alt="logo tienda"
                        width="20" height="35">  SUMILA</a>
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
                        </ul>
                            </div>
                        
                        
                    </div>  
        </nav>
</header>

<main>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-5 g-4 ">
            <?php foreach ($productos as $producto):?>
                <div class="col">
                    <div class="card h-100" >
                        <img src="<?php echo($producto["fotoProducto"])?>" class="card-img-top" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo($producto["nombresProducto"])?>
                            </h5>
                            <p class="card-text"><?php echo($producto["descripcionProducto"])?></p>
                            <a href="#" class="btn btn-primary"
                            data-bs-toggle="modal" data-bs-target="#confirmacion" ><i class="fas fa-trash-alt"></i></a>
                            <a href=" # " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$producto["idProducto"]?>">
                            <i class="far fa-edit"></i>
                            </a>
                            
                        </div>
                    </div>
                    <section>
                        <div class="modal fade" id="exampleModal<?=$producto["idProducto"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="<?= $producto["fotoProducto"] ?>" alt="foto" class="img-fluid w-100">
                                            </div>
                                            <div class="col-9">
                                                <form action="../controllers/controladorEditarProducto.php?idProducto=<?= $producto["idProducto"]?>" method="POST">
                                                    <div class="mb-3">
                                                        <label  class="form-label">Precio</label>
                                                        <input name="precioProducto" type="text" class="form-control" value="<?= $producto["precioProducto"] ?>">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="botonProducto">Editar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </section>
                    
                    <section>
                        <div class="modal fade" id="confirmacion" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Sumila</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                                </div>
                                <div class="modal-body">
                                    <p>Estas seguro de eliminar el producto?</p>
                                    <p><?= $producto["idProducto"] ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="../controllers/controladorEliminarProductos.php?idProducto=<?= $producto["idProducto"]?>" class="btn btn-primary" >Aceptar</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
            <?php endforeach?>
        </div>
    </div>
</main>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>
</html>