<!DOCTYPE html>
<html>
<head >
    <title>Ciudades del mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body bgcolor='pink'>
<center>
<h2>Cuidades del mundo</h2>
  <form action="{{ route('mostrar') }}" method="GET">
       <input type="text" name="criterio">
       <input type="submit" value="buscar">
  </form><br>
  @if (isset ($cids))
  <a href="{{route('pdf', ['crit' => $crit])}}">
  <img src="archivo-pdf.png" alt="pdf" width="40" height="40" align = "left">
  </a>
  <a href="{{route('excel', ['crit' => $crit])}}">
  <img src="excel.png" alt="pdf" width="40" height="40" align = "center">
  </a>
  <a href="{{route('word', ['crit' => $crit])}}">
  <img src="palabra.png" alt="pdf" width="40" height="40" align = "right">
  </a><br><br>
<div class="container">
<div class="row">
<div class="col-12">
    <table border='1' bgcolor='seagreen' class="table table-dark table-secondary">
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Distrito</th>
    <th>Codigo del Pais</th>
    <th>Población</th>
    </tr>
    @foreach($cids as $cd)
    <tr>
    <td>{{$cd->ID}}</td>
    <td>{{$cd->Name}}</td>
    <td>{{$cd->District}}</td>
    <td>{{$cd->CountryCode}}</td>
    <td>{{$cd->Population}}</td>
    </tr>
    @endforeach
    </table>
    @endif
    </div>
    </div>
    </div>
    </center>
</body>
</html>