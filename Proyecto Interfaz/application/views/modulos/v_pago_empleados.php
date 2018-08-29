<body>
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h2>Pago Empleados</h2>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="Descripcion">Nombre del Empleado</label>
              <input type="text" class="form-control" name="Descripcion" value="Rolando Vega">
            </div>

          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="Coste">Rubro</label>
              <input type="text"class="form-control" name="Coste" value="Electricista" disabled="false">
            </div>

          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="minimo">Trabajo Realizado</label>
              <input type="text"class="form-control" name="minimo" value="">
            </div>

          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <label for="minimo">Fecha Pago</label>
              <input type="date"class="form-control" name="minimo" value="">
            </div>

          </div>
          <div class="row">
            <div class="col-md-3 col-md-offset-4">
              <button type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#myModal">Calculadora</button>
              <button type="button" class="btn btn-primary"  name="button">Generar Pago</button>
            </div>
          </div>
        </div>
        <div class="panel-footer">

        </div>
      </div>
    </div>
  </div>
</body>
</html>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <label for="Descripcion">Produccion</label>
            <input type="text" class="form-control" name="Descripcion" value="5" placeholder="produccion">
          </div>

        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <label for="Coste">Costo</label>
            <input type="text"class="form-control" name="Coste" value="80.000" >
          </div>

        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <label for="Coste">Total</label>
            <input type="text"class="form-control" name="Coste" value="300.000" >
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
