<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}

?>

<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SAPA</a>
        </div>
        	<div id="navbar" class="collapse navbar-collapse">
          		<ul class="nav navbar-nav">
            		<!-- <li class="active"><a href="index.php">Principal</a></li> -->
					<li><a href="admin.php">Inicio</a></li>
					<li><a href="usuarios.php">Usuarios</a></li>
					<li><a href="nuevo_contrato.php">Nuevo contrato</a></li>
					<li><a href="#">Reportes</a></li>
					<li><a href="#">Enlace 4</a></li>
					<li><a href="#">Enlace 5</a></li>
					<li><a href="#">Enlace 6</a></li>
					<li><a href="#">Enlace 7</a></li>
	            </ul>
            </div><!--/menu  -->
    </div>
    </nav>
		 <div class="starter-template">
							<br>
							<br>
							<br>
			     <div class="jumbotron">
					     <div class="container text-center">
								<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
								<p> <span class="btn btn-success"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
								<p>
									<a  href="cerrar-sesion.php" class="btn btn-danger">Cerrar sesión  </a>
									<a href="#" class="btn btn-info">Corte de caja</a>
									<a href="panel_control.php" class="btn btn-warning">Panel de control</a>
								</p>
					    </div>
			     </div>
		</div> <!-- starter-template -->

				<div> <!-- contenedor Principal -->
<?php

require 'fecha_actual.php';
$conexion = mysqli_connect("localhost", "root", "Puruandiro1", "sapa");

$rpu=$_GET['rpu'];
$sql="SELECT * from contribuyentes where rpu='".$rpu."'";
$resultado = mysqli_query($conexion, $sql);

while($mostrar = mysqli_fetch_assoc($resultado)) {
    ?>

                  
					<h1><strong><?php echo $mostrar['nombre_completo']?></strong> </h1>
					<h3><?php echo $mostrar['domicilio']?></h3>
					<h3>Col. <?php echo $mostrar['colonia']?></h3>
					<h3>C.P. <?php echo $mostrar['codigo_postal']?></h3>
					<h3><?php echo $mostrar['localidad']?></h3>
					<h3>Tel: <?php echo $mostrar['telefono']?></h3>
					
					<br>
					<br>



			<center><h2><strong>Resumen</strong> </h2></center>		

<form method="post" action="estado_cuenta2.php" onsubmit="return confirmation()"  >
                <fieldset>
							  <div class="form-group">
                                <label >Zona:</label>
                                <input type="text" class="form-control" name="zona" readonly value="<?php echo $mostrar['zona']?>">
                              </div> 
                        
                             
                              <div class="form-group">
                                <label >Tarifa:</label>
                                <input type="tel" class="form-control" name="tarifa" readonly value="<?php echo $mostrar['tarifa']?>">
                              </div> 

							  

							  <h1><strong>Total a pagar: <?php echo ''.$monto.''; ?> </strong> </h1>
							  Obtener cantidad de meses entre dos fechas, entre la "fecha de ultimo pago y la actual"
							agregar el campo "debe desde" en la tabla contribuyentes
							###### Investigar la vinculacion entre tablas #########



<center>
          <button  type="submit" class="btn btn-warning btn-lg">Pagar</button>
           </form>
      </p>
	  
 
      <form action="../index.php">
       <button  type="submit" class="btn btn-primary">Regresar</button>
     </form>
</center>

     <script type="text/javascript">

function confirmation() {

    if(confirm("Realmente desea modificar?"))

    {
        return true;
    }

    return false;
}
</script>

  <?php } ?>  
						</div> <!-- contenedor Busqueda -->
				</div> <!-- contenedor Principal -->

</div><!-- /.container  general-->
<?php include 'partials/footer.php';?>