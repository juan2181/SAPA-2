<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de usuarios tecnilap</title>
    </head>
    <body>
        <?php
       
    //include("conexion.php");
     $conexion = mysqli_connect("localhost", "root", "Puruandiro1", "sapa");
       
    

     
        $sql = "INSERT INTO contribuyentes (id_contribuyente, rpu, nombre_completo, domicilio, colonia, localidad, codigo_postal, telefono, tarifa, estatus, no_medidor, fecha_alta) VALUES ('0','$_REQUEST[rpu]','$_REQUEST[nombre]','$_REQUEST[domicilio]','$_REQUEST[colonia]','$_REQUEST[localidad]','$_REQUEST[cp]','$_REQUEST[telefono]','$_REQUEST[tarifa]','$_REQUEST[estatus]','$_REQUEST[medidor]','$_REQUEST[fecha_alta]')";
        $consulta = mysqli_query($conexion, $sql);
        
    
        mysqli_close($conexion);
        ?>
        
        <script type="text/javascript">
	    alert("Registro Ingresado exitosamente");
	    window.location.href='admin.php';
 
        </script>

    </body>
</html>

