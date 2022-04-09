<div class="container">
		<h3>Sala de Aula</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Nome</dt>
					<dd>{{$funcionario->nome}}</dd>
					<dt>Capacidade</dt>
					<dd>{{$funcionario->capacidade}}</dd>
					<dt>Tipo</dt>
					<dd>{{$funcionario->tipo}}</dd>
				</dl>
				<form action="/funcionario/{{$funcionario->id}}" method="post">
					@csrf
					@method('DELETE')
					<input type="submit" value="Confirmar" class="btn btn-primary btn-sm">
					<a href="/classroom" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>