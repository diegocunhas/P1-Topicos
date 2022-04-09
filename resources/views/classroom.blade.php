<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
    <tr><th>Nome</th><th>Capacidade</th><th></th>Tipo</tr>
    @foreach($dados as $m )
      <tr>
          <td>{{ $m->nome }}</td>
          <td>{{ $m->capacidade }}</td>
          <td>{{ $m-tipo }}</td>
      </tr>
    @endforeach
    </table>
</body>
</html>