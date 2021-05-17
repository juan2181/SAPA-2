
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
<?php $conexion=mysqli_connect('localhost','root','Puruandiro1','sapa'); ?>


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
         
         
        
         
     <!--   <a class="navbar-brand"  href="#">SAPA</a>-->  
       
       
       
       
       
       
        </div>
        	<div id="navbar" class="collapse navbar-collapse">
          		<ul class="nav navbar-nav">
            		<!-- <li class="active"><a href="index.php">Principal</a></li> -->
          
					<li><a href="admin.php">Inicio</a></li>
					<li><a href="usuarios.php">Usuarios</a></li>
					<li><a href="#">Nuevo contrato</a></li>
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
                                   <!-- <img src="img/logo-ayuntamiento.png" alt="Logo" > -->
									<a href="cerrar-sesion.php" class="btn btn-danger">Cerrar sesión</a>
									<a href="#" class="btn btn-info">Corte de caja</a>
									<a href="panel_control.php" class="btn btn-warning">Panel de control</a>
								</p>
					    </div>
			     </div>
		</div> <!-- starter-template -->



				<div> <!-- contenedor Principal -->
                <a href="registro.php" class="btn btn-warning">Nuevo Usuario</a>
                        <div> <!-- Mostrar lista de usuarios -->
                        <h2 class="container text-center">Usuarios registrados</h2>
<br>
<br>
<div class="table-responsive" class="scroll_vertical" class="scroll_horizontal">

<table  class="table" class="table table-striped w-auto">

<thead>
    <tr>
        
        <td class="danger">Nombre</td>
        <td class="danger">Usuario</td>
        <td class="danger">Email</td>
        <td class="danger">Fecha de alta</td>
    </tr>
    </thead>
   
   <?php 
    $sql="SELECT * from usuarios ORDER BY id DESC";
    $result=mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>
    <tr>
        
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['usuario'] ?></td>
        <td><?php echo $mostrar['email'] ?></td>
        <td><?php echo $mostrar['fecha_registro'] ?></td>

<!-- href='./?p=alta_usuarios' -->
    <td><a href="update_usuario.php?id=<?php echo $mostrar['id'] ?>"><span class="glyphicon glyphicon-refresh"></span> </a></td>
    <td><a href="#?id=<?php echo $mostrar['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a> </td>

    
    
    


    

    </tr>
<?php 
}
 ?>
</table>











         





						</div> <!-- Mostrar lista de usuarios -->

						

				</div> <!-- contenedor Principal -->

					





</div><!-- /.container  general-->
<?php include 'partials/footer.php';?>