<div class="container">
		<h3>Nova Sala de Aula</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/classroom" method="post">
					@csrf  <!-- token de segurança -->
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}"/>
						@if($errors->has('nome'))
						<p>{{$errors->first('nome')}}</p>
						@endif
					</div>
					<div>
						<label for="capacidade">Capacidade</label>
						<input type="numeric" name="capacidade" id="capacidade" class="form-control" value="{{old('capacidade')}}"/>
						@if($errors->has('capacidade'))
						<p>{{$errors->first('capacidade')}}</p>
						@endif
					</div>
					<div>
						<label for="tipo">Tipo</label>
						<input type="text" name="tipo" id="tipo" class="form-control" value="{{old('tipo')}}"/>
						@if($errors->has('tipo'))
						<p>{{$errors->first('tipo')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Criar"/>
		    		<a href="/classroom">Voltar</a>
				</form>
			</div>
		</div>
	</div>