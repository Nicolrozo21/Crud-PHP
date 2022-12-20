<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Informacion</title>

<link rel="stylesheet" href="./crud.css">

</head>
<body class="agrupar" >
 
<div class="informacion">

      <?php 
    
        include "conexion.php";
        $sentecia="SELECT * FROM usuarios";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          
          echo "<tr>";
            echo "<td>"; echo "No.: "; echo $fila['no']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Id: "; echo $fila['id']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Correo: "; echo $fila['correo']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Contraseña: "; echo $fila['pass']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Nombres y Apellidos: "; echo $fila['usu']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Estado: "; echo $fila['Estado']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Acceso identificador: "; echo $fila['identificador']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Acceso hora: "; echo $fila['Hora']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Rol: "; echo $fila['Rol']; echo "</td>"; echo "</br>";
            echo "<td>"; echo "Descripción: "; echo $fila['Descripcion']; echo "</td>"; echo "</br>";
           
 
            echo "<td><a href='modificar1.php?no=".$fila['no']."'> <button type='button'class='btn btn-success'>Modificar</button> </a></td>";
         
            echo " <td><a href='eliminar.php?no=".$fila['no']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }    

      ?>

<th> <a href="crearUsuario.html">
   <button type="button" class="btn btn-info">Nuevo</button> 
  </a> </th>

      </div>
  
     
<div class="iconos">
<a class="boton1" href="home.html">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-left" width="47" height="47" viewBox="0 0 24 24" stroke-width="1.5" stroke="#E3E3E3" fill="none" stroke-linecap="round" stroke-linejoin="round">

<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
<path d="M20 15h-8v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h8a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1z" />
</svg>
</a>
</div>

</body>
</html>