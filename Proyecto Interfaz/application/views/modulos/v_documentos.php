<body>
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h2>Carga de Documentos</h2>
          <div class="row">
            <div class="col-md-3">
              <label for="">Fecha del Documento</label>
              <input type="date" class="form-control" name="fechaDoc" value="">
            </div>
            <div class="col-md-3">
              <label for="Coste">Nro. Documento</label>
              <input type="text"class="form-control" name="nroDoc" value="" placeholder="Numero de Documento">
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="sel1">Tipo Documento:</label>
                <select class="form-control" id="sel1">
                  <option>Plano</option>
                  <option>Contrato</option>
                  <option>Documentos Licitacion</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <label for="Coste">Ubicacion</label>
              <input type="text"class="form-control" name="nroDoc" value="" placeholder="Ubicacion Fisica Documento">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="minimo">Descripcion de Contenido</label>
              <input type="text"class="form-control" name="minimo" value="" placeholder="Breve Descripcion del Contenido del Documento">
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
            <div class="col-md-4 col-md-offset-4">
              <h3>CUALES SON LAS ESTRUCTURAS A CONSTRUIR?</h3>
            </div>
            <br>
            <div class="col-md-3">
              <label for="">Piezas</label>
              <input type="text" class="form-control" name="cantPiezas" value="" placeholder="Cantidad de Piezas">
            </div>
            <div class="col-md-3">
              <label for="">Baños</label>
              <input type="text" class="form-control" name="cantBaños" value="" placeholder="Cantidad de Baños">
            </div>
            <div class="col-md-3">
              <label for="">Sala</label>
              <input type="text" class="form-control" name="cantSalas" value="" placeholder="Cantidad de Salas">
            </div>
          </div>
          <div class="row">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Documento Nro.</th>
                  <th>Fecha de Documento</th>
                  <th>Descripcion</th>
                  <th>Tipo</th>
                  <th>Ubicacion</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>05/06/2018</td>
                  <td>Plano inicial de la obra a realizar en la facultad FP-UNA</td>
                  <td>Plano</td>
                  <td>Gaveta 5</td>
                  <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit" style="font-size:24px;"></i></button><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fa fa-trash" style="font-size:24px;"></i></button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>08/06/2018</td>
                  <td>Modificacion del plano Nro. 1, se agrega algunas estructuras</td>
                  <td>Plano</td>
                  <td>Gaveta 5</td>
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
