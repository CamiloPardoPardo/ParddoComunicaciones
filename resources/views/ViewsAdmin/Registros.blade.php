@extends('layouts.app')

@section('contecn')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Registar nuevo producto</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/Nuevo-Producto" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif



            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Referencia</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Referencia" autocomplete="off" placeholder="Referencia" value="{{ old('Referencia')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Marca</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Marca" autocomplete="off" placeholder="Marca" value="{{ old('Marca')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Descripción</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Descripcion" autocomplete="off" placeholder="Descripcion" value="{{ old('Descripcion')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Imagen</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="img" autocomplete="off" placeholder="img" value="{{ old('img')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Producto</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Producto" autocomplete="off" placeholder="Producto" value="{{ old('Producto')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Inversion Total</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Inversion_Total" autocomplete="off" placeholder="Inversion Total" value="{{ old('Inversion_Total')}}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Cantidad</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Cantidad" autocomplete="off" placeholder="Cantidad" value="{{ old('Cantidad')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Precio de venta</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Precio_Final" autocomplete="off" placeholder="Precio_Final" value="{{ old('Precio_Final')}}">
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <!-- general form elements disabled -->
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="/Nuevo-Registro" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif


            <div class="row">
              <div class="col-sm-10">
                <!-- select -->
                <div class="form-group">
                  <label>Area</label>
                  <select class="form-control" id="exampleFormControlSelect1"  name="Area" value="{{ old('Area')}}">
                    <option value="Solter">Soltero/a</option>
                    <option value="Recargas">Recargas</option>
                    <option value="Superpagos">Superpagos</option>
                    <option value="Mano de obra">Mano de obra</option>
                    <option value="Gastos">Gastos</option>
                    <option value="Recargar Plataforma">Recargar Plataforma</option>
                    <option value="Mover a recarga">Mover a recargas</option>
                    <option value="Pedidos">Pedidos</option>
                    <option value="Repuesto">Repuesto</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10">
                <!-- text input -->
                <div class="form-group">
                  <label>Valor</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="Valor" autocomplete="off" placeholder="Valor" value="{{ old('Valor')}}">
                </div>
              </div>
              <div class="col-sm-10">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-10">
                <!-- textarea -->
                <div class="form-group">
                  <label>Observación</label>
                  <textarea class="form-control" rows="3" id="exampleInputPassword1" name="Observacion" autocomplete="off" placeholder="Observacion" value="{{ old('Observacion')}}"></textarea>
                </div>
              </div>
            </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- general form elements disabled -->
    <!-- /.card -->
  </div>


</section>

@endsection