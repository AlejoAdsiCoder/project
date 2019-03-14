@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card">
  <div class="card-header">
  <h4><i class="fas fa-user float-left"></i>Lista de entrenadores</h4>
  <button type="button" class="btn btn-success btn-lg float-right" data-toggle="modal" data-target="#Create">Nuevo Entrenador</button>
  </div>

  <div class="modal fade" id="Create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <div class="card-body">
    <div class="side col-md-8">
        <table class="table table-dark">
            <thead>
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
                <td>3456523</td>
                <td>Alejandro</td>
                <td>P cardona</td>
                <td>25/10/93</td>
                <td>apatino@misena.co</td>
                
                <td>Ciclismo</td>
                <td>San Jorge</td>
                <td>cll 46 #65-23</td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>3456523</td>
                <td>Alejandro</td>
                <td>P cardona</td>
                <td>25/10/93</td>
                <td>apatino@misena.co</td>
                <td>Ciclismo</td>
                <td>San Jorge</td>
                <td>cll 46 #65-23</td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>3456523</td>
                <td>Alejandro</td>
                <td>P cardona</td>
                <td>25/10/93</td>
                <td>apatino@misena.co</td>
                <td>Ciclismo</td>
                <td>San Jorge</td>
                <td>cll 46 #65-23</td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
</div>

    
</div>
@endsection