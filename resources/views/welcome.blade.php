<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3da678766a.js" crossorigin="anonymous"></script>
</head> 
<body>
    <h1 class="text-center">DSM-42</h1>
    <!-- Modal registro de alumnos-->
<div class="modal fade" id="modalRegistrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Alumno </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del Alumno</label>
            <input type="text" class="form-control" id="exampleImputEmail1" aria-describedby="emailHelp"
            name="txtnombre">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="exampleInputEmail1"
            name=#txtfn>
          </div>
        
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto (URL)</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="fotoHelp"
            name=#txtfoto>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    <div class="p-5 table-responsive">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir Alumno</button>
        <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">FN</th>
                <th scope="col">FOTO</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              @if (isset($datos) && count($datos) > 0)
                  @foreach ($datos as $item)
                      <tr>
                          <th>{{$item->id}}</th>
                          <td>{{$item->nombre}}</td>
                          <td>{{$item->fn}}</td>
                          <td>{{$item->foto}}</td>
                          <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-warning btn-sm"> <i class="fa fa-user"></i> </a>
                          </td>
                          <td> 
                            <a href="#" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i> </a>
                          </td>  

<!-- Modal de alumnos modificar  -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar datos </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp">
            <div id="nombreHelp" class="form-text">Introduce tu nombre completo.</div>
          </div>
        
          <div class="mb-3">
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento">
          </div>
        
          <div class="mb-3">
            <label for="foto" class="form-label">Foto (URL)</label>
            <input type="text" class="form-control" id="foto" aria-describedby="fotoHelp">
            <div id="fotoHelp" class="form-text">Introduce la URL de tu foto.</div>
          </div>
                    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="sumit" class="btn btn-primary">Modificar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
                      </tr>
                  @endforeach
              @else
                  <tr>
                      <td colspan="6">No hay datos disponibles.</td>
                  </tr>
              @endif
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
