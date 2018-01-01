<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$cat->idcategoria}}">
	{{Form::Open(array('action'=>array('CategoriaController@destroy',$cat->idcategoria),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Categoría</h4>
			</div>
			<div class="modal-body">
				<p>Desea realmente Eliminar esta categoría</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				<button type="submit" class="btn btn-primary">Si</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>