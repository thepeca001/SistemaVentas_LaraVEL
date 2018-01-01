@extends ('layouts.admin')
@section ('contenido')
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
            	<label for="proveedor">Proveedor</label>
            	<p>{{ $ingresos->nombre }}</p>
            </div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label>Tipo Comprobante</label>
				<p>{{$ingresos->tipo_comprobante}}</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
			<label for="serie_comprobante">Serie Comprobante</label>
            	<p>{{$ingresos->serie_comprobante}}</p>
		</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
			<label for="num_comprobante">Numero de Comprobante</label>
            	<p>{{$ingresos->num_comprobante}}</p>
		</div>
		</div>
	</div>

	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-body">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<table class="table table-striped table-bordered table-condensed table-hover" id="detalles">
						<thead style="background-color: #A9D0F5">
							
							<th>Articulo</th>
							<th>Cantidad</th>
							<th>Precio de Compra</th>
							<th>Precio de Venta</th>
							<th>Subtotal</th>
						</thead>
						<tfoot>
							
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th><h4 id="total">{{$ingresos->total}}</h4> </th>
						</tfoot>
						<tbody>
							@foreach($detalles as $det)
							<tr>
							  <td>{{$det->articulo}}</td>
							  <td>{{$det->cantidad}}</td>
							  <td>{{$det->precio_compra}}</td>
							  <td>{{$det->precio_venta}}</td>
							  <td>{{$det->cantidad*$det->precio_compra}}</td>
							  </tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>

			
	</div>

@endsection