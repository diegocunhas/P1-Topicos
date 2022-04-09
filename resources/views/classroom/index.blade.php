<h3>Salas de Aula</h3>
<a href="/classroom/create" class="btn btn-primary btn-sm">Novo</a>
<table class="table table-striped">
<tr>
	<th>Nome</th>
	<th>Capcidade</th>
	<th>Tipo</th>
</tr>
<!-- Loop pela coleção de funcionários -->
@foreach($dados as $c)
<tr>
	<td>{{ $c->nome }}</td>
	<td>{{ $c->capacidade }}</td>
	<td>{{ $c->tipo }}</td>
	<td>
		<a href="/clasroom/{{$f->id}}" class="btn btn-primary btn-sm">Excluir</a>
		<a href="/clasroom/{{$f->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>