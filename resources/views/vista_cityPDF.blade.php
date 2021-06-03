<!DOCTYPE html>
<html>
<head >
    <title>Ciudades del mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body bgcolor='pink'>
<center>
<h2>Cuidades del mundo</h2>
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
    </div>
    </div>
    </div>
    </center>
</body>
</html>