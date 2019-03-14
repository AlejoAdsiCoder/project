<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/crudEnt.css')}}">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Gesport</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="clubes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clubes</a>
      
      <div class="dropdown-menu" aria-labelledby="clubes">
        <a class="dropdown-item" href="#">Administrar</a>
        <a class="dropdown-item" href="#">Registrar Clubes</a>
        <a class="dropdown-item" href="#">Añadir Deportistas</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="clubes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Escenarios Deportivos</a>
      
      <div class="dropdown-menu" aria-labelledby="clubes">
        <a class="dropdown-item" href="#">Administrar</a>
        <a class="dropdown-item" href="#">Añadir</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="clubes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Deportistas</a>
      
      <div class="dropdown-menu" aria-labelledby="clubes">
        <a class="dropdown-item" href="#">Administrar</a>
        <a class="dropdown-item" href="#">Añadir</a>
      </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>
<h2>Entrenador</h2>
    <!---<div class="main col-md-4">
        
        
        <form action="">
                <div class="row">
                    <div class="form-group col">
                        <label for="">Tipo Documento</label>
                        <select name="" class="form-control" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="">Número identificación</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                    <div class="row">
                    <div class="form-group col">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha nacimiento</label>
                        <input type="date" class="form-control" id="fechanac">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="row">
                    <div class="form-group col">
                        <label for="">Barrio</label>
                        <select name="barrio" class="form-control" id=""></select>
                    </div>
        
                    <div class="form-group col">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="">Deporte</label>
                        <select name="deporte" class="form-control" id="deporte">
                            <option value="">baloncesto</option>
                            <option value="">natacion</option>
                            <option value="">futbol</option>
                        </select>
                    </div>
                    
                    <button class="btn btn-primary">Registrar</button>
        </form>
    </div>-->
    <div class="container">
    <div class="side col-md-8">
        <table class="table table-sm">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">E-mail</th>
                <th scope="col">Deporte</th>
                <th scope="col">Barrio</th>
                <th scope="col">Dirección</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>