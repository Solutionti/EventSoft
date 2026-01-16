<!-- nombre
dias
precio -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>EventSoft - Confuguracion </title>
    <?php require_once 'componentes/head.php'; ?>
  </head>
  <body>
    <div class="container-scroller">
      <?php require_once 'componentes/navbar.php'; ?>
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header flex-wrap">
              <div class="row">
                <div class="col-md-6">
                  <div class="card-header text-uppercase">configuracion del evento</div>
                </div>
                <div class="col-md-6">
                  <div class="header-left">
                    <button class="btn btn-primary mb-2 mb-md-0 me-2 btn-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear Usuarios </button>
                    <button class="btn btn-outline-danger mb-2 mb-md-0 me-2 btn-rounded" data-bs-toggle="modal" data-bs-target="#modalProceso">Crear Regalo</button>
                    <button
                      class="btn btn-outline-primary bg-white mb-2 mb-md-0 btn-rounded"
                      data-bs-toggle="modal"
                      data-bs-target="#exportarexcelmodal"
                    >
                      Crear Servicio
                    </button>
                    <button class="btn btn-primary mb-2 mb-md-0 me-2 btn-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Crear Patrocinio</button>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-7">
                  <div class="card-header text-uppercase">Usuarios</div>
                  <table class="table table-striped table-borderless mt-3">
                    <thead>
                      <tr>
                        <th class="color-morado text-white text-uppercase"></th> 
                        <th class="color-morado text-white text-uppercase">Documento</th>
                        <th class="color-morado text-white text-uppercase">Nombre completo</th>
                        <th class="color-morado text-white text-uppercase">telefono</th>
                        <th class="color-morado text-white text-uppercase">correo</th>
                        <th class="color-morado text-white text-uppercase">rol</th>
                        <th class="color-morado text-white text-uppercase">estado</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Ver</a>
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                          </div>
                        </div>
                        </td>
                        <td>1110542802</td>
                        <td>JERSON GALVES SUNCHO</td>
                        <td>3155639791</td>
                        <td>jerson_galvez@hotmail.com</td>
                        <td>85.000</td>
                        <td>85.000</td>
                      </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-md-5">
                  <div class="card-header text-uppercase">codigos promocionales</div>
                  <table class="table table-striped table-borderless mt-3">
                    <thead>
                      <tr>
                        <th class="color-morado text-white text-uppercase"></th> 
                        <th class="color-morado text-white text-uppercase">Deportista</th>
                        <th class="color-morado text-white text-uppercase">Codigo</th>
                        <th class="color-morado text-white text-uppercase">precio</th>
                        <th class="color-morado text-white text-uppercase">estado</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Ver</a>
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                          </div>
                        </div>
                        </td>
                        <td>1110542802</td>
                        <td>NTU1Q2C</td>
                        <td>300000</td>
                        <td>ACTIVO</td>
                      </tr>
                    </tbody>
                    </table>
              </div>
              <div class="row mt-5">
                <div class="col-md-5">
                  <div class="card-header text-uppercase">patrocinios</div>
                  <table class="table table-striped table-borderless mt-3">
                    <thead>
                      <tr>
                        <th class="color-morado text-white text-uppercase"></th> 
                        <th class="color-morado text-white text-uppercase">logo</th>
                        <th class="color-morado text-white text-uppercase">nombre</th>
                        <th class="color-morado text-white text-uppercase">descripcion</th>
                        <th class="color-morado text-white text-uppercase">valor aporte</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Ver</a>
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                          </div>
                        </div>
                        </td>
                        <td>MRB001</td>
                        <td>RUTINA PRINCIPAL</td>
                        <td>30</td>
                        <td>85.000</td>
                      </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-md-7">
                  <div class="card-header text-uppercase">productos o servicios</div>
                  <table class="table table-striped table-borderless mt-3">
                    <thead>
                      <tr>
                        <th class="color-morado text-white text-uppercase"></th> 
                        <th class="color-morado text-white text-uppercase">imagen</th>
                        <th class="color-morado text-white text-uppercase">Codigo</th>
                        <th class="color-morado text-white text-uppercase">nombre producto</th>
                        <th class="color-morado text-white text-uppercase">precio</th>
                        <th class="color-morado text-white text-uppercase">vistas</th>
                        <th class="color-morado text-white text-uppercase">estado</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Ver</a>
                            <a class="dropdown-item" href="#">Editar</a>
                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                          </div>
                        </div>
                        </td>
                        <td>IMAGEN</td>
                        <td>1</td>
                        <td>CORRER 1</td>
                        <td>300.000</td>
                        <td>5</td>
                        <td>ACTIVO</td>
                      </tr>
                    </tbody>
                    </table>
                </div>
              </div>


              

            </div>
          </div>
        </div>
      </div>
    </div>
      <!--  -->

      <div class="body flex-grow-1">
        <div class="row">
                          
                        
                </div>
              </div>
            <?php require_once 'componentes/footer.php'; ?>
        </div>
          </div>  
        <!--  -->
    </div>
    <?php require_once 'componentes/scripts.php'; ?>
</body>
</html>