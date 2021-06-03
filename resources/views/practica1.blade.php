<!DOCTYPE html>
<html>
<head>
<title>Practica 1 . Aplicaciones web para I4.0</title>
    <style>
        h5,p,#id1,#id2,#id3,#id4{
           color:brown; 
           text-align:center;
           text-transformation:overline;
           text-transformation:uppercase;
           text-shadow:4px 4px teal;
           font-family: verdana;
        }
        #id5{
           color:brown; 
           text-align:center;
           
        
        }
        
        table, th, td {
  border: 1px solid black;
  background-color: #116D4F;
}
       #idp{
  border: 1px solid gray;
  background-color: #EAEA00;
  
}
input, textarea, select, button{
  width : 150px;
  margin: 0;

  -webkit-box-sizing: border-box; 
     -moz-box-sizing: border-box; 
          box-sizing: border-box;
      
        
        
    </style>
</head>
<body bgcolor="pink">
  <h1> <a href="http://utvt.edomex.gob.mx/"> Universidad Tecnologica del Valle de 
Toluca </a></h1>
  <img src="https://utvtblog.files.wordpress.com/2017/04/cropped-logo-utvt.png" width="600" height="180">
  <h2 id="id4">Tencologias de la informacion</h2>
  <h3 id="id3">Desarrollo de software multiplataforma</h3>
  <h4 id="id1">DSM-52</h4>
  <h5>Miguel Angel Esquivel Gutierrez</h5>
  <h6 id="id2">al221811710@gmail.com</h6>
  
  <p>Estudiante de UTVT</p>
  
  <Form action="datos.php" method="GET"> 
  
    <p style="color:purple;">te gusta el desarrollo web?</p>
    ¿Como te llamas?<input type="text" name="pregunta" size="30"><br> 
    ¿Te gustaria aprender a programar?<br>
    <input type="radio" name="pregunta" /> <label>si</label><br>
    <input type="radio" name="pregunta" /> <label>no</label><br>
    <input type="radio" name="pregunta" /> <label>mas o menos</label><br>
    ¿Por que?<input type="text" name="pregunta" size="30"><br>
    <button name="button">enviar</button>
  </form>
  <p id="idp">pasatiempos de mis amigos</p>
  
  <table style="width:100%">
  <tr>
    <th>Nombre</th>
    <th>Pasatiempo</th>
    <th>Edad</th>
  </tr>
  <tr>
    <td>Isaac Garcia</td>
    <td>Ciclismo</td>
    <td>19</td>
  </tr>
  <tr>
    <td>Pedro Reyes</td>
    <td>Video juegos</td>
    <td>20</td>
  </tr>
</table>

</body>
</html>