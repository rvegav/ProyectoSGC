<body>
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h2>Mantenedor de Herramientas</h2>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="Descripcion">Descripcion</label>
              <input type="text" class="form-control" name="Descripcion" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="Coste">Marca</label>
              <input type="text"class="form-control" name="Coste" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="minimo">Cantidad Actual</label>
              <input type="text"class="form-control" name="minimo" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-md-offset-4">
              <button type="button" class="btn btn-primary" name="button">Aceptar</button>
              <button type="button" class="btn btn-primary"  name="button">Cancelar</button>
            </div>
          </div>
          <div class="row">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Descripcion</th>
                  <th>Marca</th>
                  <th>Cantidad</th>
                  <!-- <th>Fecha Mantenimiento</th> -->
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Moladora</td>
                  <td>Bosch</td>
                  <td>4</td>
                  <!-- <td>Si</td> -->
                  <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit" style="font-size:24px;"></i></button><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fa fa-trash" style="font-size:24px;"></i></button></td>
                </tr>
                <tr>
                  <td>Taladro</td>
                  <td>Bosch</td>
                  <td>12</td>
                  <!-- <td>Si</td> -->
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
