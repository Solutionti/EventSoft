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
    <title>EventSoft - membresias</title>
    <?php require_once 'componentes/head.php'; ?>
  </head>
  <body>
      <?php require_once 'componentes/navbar.php'; ?>
      <!--  -->
      <div class="body flex-grow-1">
        <div class="row">
            <div class="col-md-7">
                <div class="container-lg px-4">
                  <div class="card mb-4">
                    <div class="card-header">Lista de Usuarios</div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr> 
                                <th class="text-uppercase bg-primary text-white">Documento</th>
                                <th class="text-uppercase bg-primary text-white">Nombre completo</th>
                                <th class="text-uppercase bg-primary text-white">telefono</th>
                                <th class="text-uppercase bg-primary text-white">correo</th>
                                <th class="text-uppercase bg-primary text-white">rol</th>
                                <th class="text-uppercase bg-primary text-white">estado</th>
                                <th class="text-uppercase bg-primary text-white"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>MRB001</td>
                                <td>RUTINA PRINCIPAL</td>
                                <td>30</td>
                                <td>85.000</td>
                                <td>85.000</td>
                                <td>85.000</td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Ver</a>
                                      <a class="dropdown-item" href="#">Editar</a>
                                      <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="container-lg px-4">
                    <div class="card mb-4">
                      <div class="card-header">Lista de Codigos Promocionales</div>
                        <div class="card-body">
                          <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr> 
                                <th class="text-uppercase bg-primary text-white">Deportista</th>
                                <th class="text-uppercase bg-primary text-white">Codigo</th>
                                <th class="text-uppercase bg-primary text-white">precio</th>
                                <th class="text-uppercase bg-primary text-white">estado</th>
                                <th class="text-uppercase bg-primary text-white"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>MRB001</td>
                                <td>RUTINA PRINCIPAL</td>
                                <td>30</td>
                                <td>85.000</td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Ver</a>
                                      <a class="dropdown-item" href="#">Editar</a>
                                      <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                    </div>
                                  </div>
                                </td>
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
            <?php require_once 'componentes/footer.php'; ?>
        </div>
          </div>  
        <!--  -->
    </div>
    <?php require_once 'componentes/scripts.php'; ?>
</body>
</html>