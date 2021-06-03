<!DOCTYPE html>
<html>
<head>
<title>Calculadora</title>
</head>
<body bgcolor='pink' >
<p>simon si sirve</p>
<center>
<h3>Calculadora Basica</h3> 
<table border="0" bgcolor="teal">
<form action="{{ route ('sumar') }}" method="GET"> 
     <tr>
        <td style="width: 25%;"><label>Numero 1:</label> </td>
        <td style="width: 25%;"><input type="number" name="num1"/></td>
        <td style="width: 25%;"><label>Numero 2:</label></td>
        <td style="width: 25%;"><input type="number" name="num2"/></td> 
     </tr>
     <tr>
        <td><input type="radio" value="1" name="operacion" checked />
            <label>Sumar</label></td>
        <td><input type="radio" value="2" name="operacion">
            <label>restar</label></td>
        <td><input type="radio" value="3" name="operacion">
            <label>Dividir</label></td>
        <td><input type="radio" value="4" name="operacion">
            <label>multiplicar</label> <br></td> 
     </tr>
     <tr>
        <td></td>
        <td><input type="submit" value="Aceptar"/></td>
        <td><input type="reset" value="Borrar"/></td>
        <td></td> 
     </tr>
     @if(isset ($res))
       <tr><td colspan='4'>El resultado de la operación es: {{ $res }}</td></tr>
     @endif
</table>
</center>
</body>
</html>