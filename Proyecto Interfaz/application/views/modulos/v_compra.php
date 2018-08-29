<body>
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h2>Orden de Compra</h2>
          <div class="row">
            <div class="col-md-4 ">
              <label for="">Proveedor</label>
              <input type="text" class="form-control" name="fechaDoc" value="" placeholder="Proveedor">
            </div>
            <div class="col-md-4 ">
              <label for="">Fecha de Pedido</label>
              <input type="date" class="form-control" name="fechaDoc" value="" placeholder="">
            </div>
            <div class="col-md-4 ">
              <label for="">Fecha de Pago</label>
              <input type="date" class="form-control" name="fechaDoc" value="" placeholder="">
            </div>
          </div>
          <hr>
          <!-- •	Proveedor (campo de texto)
          •	Fecha del pedido (calendario)
          •	Fecha de pago (calendario)
          •	Artículo
          •	Descripción
          •	Cantidad
          •	Precio unitario
          •	Precio total de compra (RN.3 Cálculos)
          •	IVA (RN.3 Cálculos)
          •	Subtotal (RN.3 Cálculos)
          •	Total (RN.3 Cálculos)
        -->
          <div class="col-md-3">
            <label for="">Articulo</label>
            <input type="text" class="form-control" name="fechaDoc" value="" placeholder="Articulo">
          </div>
          <div class="col-md-3">
            <label for="">Descripcion</label>
            <input type="text" class="form-control" name="fechaDoc" value="" placeholder="Descripcion">
          </div><div class="col-md-3">
            <label for="">Cantidad</label>
            <input type="text" class="form-control" name="fechaDoc" value="" placeholder="Cantidad Requerida">
          </div><div class="col-md-3">
            <label for="">Precio</label>
            <input type="text" class="form-control" name="fechaDoc" value="" placeholder="Precio unitario">
          </div>
          <!-- <div class="col-md-1 col-md-offset-2">
            <button type="button" class="btn btn-primary" name="button">Enviar Orden</button>
          </div> -->
          <div class="row">
            <div class="col-md-2 col-md-offset-5">
              <br>
              <button type="button" class="btn btn-primary" name="button">Agregar</button>
              <button type="button" class="btn btn-primary"  name="button">Cancelar</button>
            </div>
            <div class="col-md-3">
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <table class="table table-responsive">
                <thead>
                  <tr>
                    <th>Articulo</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Cemento</td>
                    <td>40</td>
                    <td>40.000</td>
                    <!-- <td>Gaveta 5</td> -->
                    <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit" style="font-size:24px;"></i></button><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fa fa-trash" style="font-size:24px;"></i></button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Varillas</td>
                    <td>100</td>
                    <td>12.000</td>
                    <!-- <td>Gaveta 5</td> -->
                    <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit" style="font-size:24px;"></i></button><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fa fa-trash" style="font-size:24px;"></i></button></td>
                    <tfoot>
                      <hr>
                      <tr>
                        <td>IVA 5%: 0 </td>
                        <td>IVA 10%: 280.000</td>
                        <td>Subtotal: 2.220.000</td>
                        <td>Total: 2.800.000</td>
                      </tr>
                    </tfoot>
                  </tr>

                </tbody>
              </table>
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
