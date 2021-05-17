<html>
    <head>
        <meta charset="UTF-8">
        <title>ACTUALIZAR USUARIO</title>
    </head>
    <body>
        <?php
     
     $conexion=mysqli_connect('localhost','root','Puruandiro1','sapa');

     
   $id=$_POST['id'];
   $nombre=$_POST['nombre']; 
   $usuario=$_POST['usuario'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   

    
    $sql = "UPDATE usuarios SET id= $id, nombre = '$nombre', usuario = '$usuario', password = '$pass', email = '$email' WHERE id = '$id'";


      $consulta = mysqli_query($conexion, $sql);
        
      if($consulta){
           /* echo "El alumno se ha modificado";
            echo '<p><a href="formulario.html">Regresar</a></p>'; */
        }
        else {
         /* echo "Error: El alumno no se pudo modificar "; */
            
        } 
        mysqli_close($conexion);
        ?>

<script type="text/javascript">
	    window.location.href='usuarios.php';
        </script>

    </body>
</html>