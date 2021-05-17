<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilos.css">

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


				</div> <!-- contenedor Principal -->


</div><!-- /.container  general-->
<?php include 'partials/footer.php';?>



<?php 

	$conexion=mysqli_connect('localhost','root','Puruandiro1','sapa');



 ?>
<h1>Resultado de la busqueda </h1>
<br>

	<table class="table table-striped w-auto">
    <thead>
		<tr>
			<td>RPU</td>
			<td>Nombre</td>
			<td>Direccion</td>
            <td>Colonia</td>
            <td>Localidad</td>
			<td>Tarifa</td>
        </tr>
        </thead>



		<?php 
		
        $busqueda=$_POST['busqueda'];

        $sql="SELECT * FROM contribuyentes WHERE rpu LIKE '%$busqueda%' or nombre_completo LIKE '%$busqueda%' or domicilio LIKE '%$busqueda%' or no_medidor LIKE '%$busqueda%'" ;
		
		$result=mysqli_query($conexion, $sql);


		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['rpu']  ?></td>
			<td><?php echo $mostrar['nombre_completo'] ?></td>
			<td><?php echo $mostrar['domicilio'] ?></td>
            <td><?php echo $mostrar['colonia'] ?></td>
            <td><?php echo $mostrar['localidad'] ?></td>
			<td><?php echo $mostrar['tarifa'] ?></td>
			
			<td><a href="#.php?id=<?php echo $mostrar['rpu'] ?>"><span class="glyphicon glyphicon-refresh"></span> </a></td>
			<td><a href="estado_cuenta.php?rpu=<?php echo $mostrar['rpu'] ?>"><button  type="submit" class="btn btn-warning">ESTADO DE CUENTA</button> </a></td>

		</tr>
	<?php 
	}
	 ?>
	</table>
	
	<a href="admin.php"><button  type="submit" class="btn btn-warning">REGRESAR</button> </a>


</body>
</html>