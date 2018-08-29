<body>
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h2>Mantenedor de Empleados</h2>
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <label for="Descripcion">Primer Nombre</label>
              <input type="text" class="form-control" name="Descripcion" value="">
            </div>
            <div class="col-md-4">
              <label for="Coste">Segundo Nombre</label>
              <input type="text"class="form-control" name="Coste" value="">
            </div>

          </div>

          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <label for="minimo">Primer Apellido</label>
              <input type="text"class="form-control" name="minimo" value="">
            </div>
            <div class="col-md-4">
              <label for="minimo">Segundo Apellido</label>
              <input type="text"class="form-control" name="minimo" value="">
            </div>

          </div>

          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="form-group">
                <label for="sel1">Seleccione Rubro:</label>
                <select class="form-control" id="sel1">
                  <option>Electricista</option>
                  <option>Plomero</option>
                  <option>Ingeniero</option>
                  <option>Arquitecto</option>
                </select>
              </div>

            </div>

          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 col-md-offset-4">
              <button type="button" class="btn btn-primary" name="button">Aceptar</button>
              <button type="button" class="btn btn-primary"  name="button">Cancelar</button>
            </div>
            <div class="col-md-3">
            </div>
          </div>
          <div class="row">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Primer Nombre</th>
                  <th>Segundo Nombre</th>
                  <th>Primer Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Rubro</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Rolando</td>
                  <td>Andres</td>
                  <td>Vega</td>
                  <td>Vega</td>
                  <td>Electricista</td>
                  <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit" style="font-size:24px;"></i></button><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fa fa-trash" style="font-size:24px;"></i></button></td>
                </tr>
                <tr>
                  <td>Johana</td>
                  <td>Mabel</td>
                  <td>Britez</td>
                  <td>Filartiga</td>
                  <td>Ingeniera</td>
                  <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit" style="font-size:24px;"></i></button><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fa fa-trash" style="font-size:24px;"></i></button></td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class="panel-footer">

        </div>
      </div>
    </div>
  </div>
</body>
</html>
