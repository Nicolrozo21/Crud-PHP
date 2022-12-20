
<?php
  
  $consulta=ConsultarUsuario($_GET['no']);

  function ConsultarUsuario( $no_usu)
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM usuarios WHERE no='".$no_usu."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
  
    $fila['id'],
    $fila['correo'],
    $fila['pass'],
    $fila['usu'],
    $fila['Estado'],
    $fila['identificador'],
    $fila['Hora'],
    $fila['Rol'],
    $fila['Descripcion']
            
   ];
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Usuario</title>

</head>


<body>

<style type="text/css">
  body {
    color: black;
    background-color: #81c7f2
    }

</style>

  <div id="contenido">

  		<span> <h1 style="text-aling: center">Modificar Usuario</h1> </span>
  		<br>
      
	  <form action="modificar2.php" method="POST" style="background-color: #FFFFFF; width:30rem; height:20rem; border-radius: 1rem; border: #212121 solid 3px;">

 

      <input type="hidden" name="no"  value="<?php echo $_GET['no']?>">

  		<label style="margin-left: 1rem">Id Usuario: </label>
  		<input type="text" id="id" name="id" value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label style="margin-left: 1rem">Correo: </label>
  		<input type="text" id="correo" name="correo" value="<?php echo $consulta[1] ?>"><br>
  		
        <label style="margin-left: 1rem">Contraseña: </label>
  		<input type="text" id="contraseña" name="contraseña" value="<?php echo $consulta[2] ?>"><br>

        <label style="margin-left: 1rem">Nombre: </label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo $consulta[3] ?>"><br>
        
        <label style="margin-left: 1rem">Estado: </label>
  		<input type="text" id="estado" name="estado" value="<?php echo $consulta[4] ?>"><br>
        
        <label style="margin-left: 1rem">Acceso identificador: </label>
  		<input type="text" id="identificador" name="identificador" value="<?php echo $consulta[5] ?>"><br>
        
        <label style="margin-left: 1rem">Acceso Hora: </label>
  		<input type="text" id="hora" name="hora" value="<?php echo $consulta[6] ?>"><br>

        <label style="margin-left: 1rem">Rol: </label>
  		<input type="text" id="rol" name="rol" value="<?php echo $consulta[6] ?>"><br>

  		<label style="margin-left: 1rem">Descripcion: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion" style="margin-left: 1rem"> <?php echo $consulta[7] ?>  </textarea><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>

  	
  </div>
  





</body>
</html>