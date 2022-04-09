<div class="container">
		<h3>Editar Sala de Aula</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/classroom/{{$dados->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{empty(old('nome')) ? $dados->nome : old('nome')}}"/>
						@if($errors->has('nome'))
						<p>{{$errors->first('nome')}}</p>
						@endif	
					</div>
					<div>
						<label for="capacidade">Capacidade</label>
						<input type="text" name="capacidade" id="capacidade" class="form-control" value="{{empty(old('capacidade')) ? $dados->capacidade : old('capacidade')}}"/>
						@if($errors->has('capacidade'))
						<p>{{$errors->first('capacidade')}}</p>
						@endif
					</div>
					<div>
						<label for="tipo">Tipo</label>
						<input type="text" name="tipo" id="tipo" class="form-control" value="{{(empty(old('tipo')))?$dados->tipo:old('tipo')}}"/>
						@if($errors->has('tipo'))
						<p class="text-danger">{{$errors->first('tipo')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/classroom" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>