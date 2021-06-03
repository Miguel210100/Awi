<!DOCTYPE html>
<html>
<head>
    <title>Vista Country</title>
</head>
<body bgcolor="purple">
<center>
  <h2>Paises</h2>
  <table border="1" bgcolor="#17F105">
      <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Continente</th>
          <th>Año de Independencia</th>
          <th>Población</th>
          <th>Expectativa de vida en años</th>
      </tr>
     @foreach($cty as $cds)
     <tr> 
      <td>{{ $cds-> Code }}</td>
      <td>{{ $cds-> Name }}</td>
      <td>{{ $cds-> Continent }}</td>
      <td>{{ $cds-> IndepYear }}</td>
      <td>{{ $cds-> Population }}</td>
      <td>{{ $cds-> LifeExpectancy }}</td>
      <br>
     </tr> 
     @endforeach
   </table>
</center>
</body>
</html>