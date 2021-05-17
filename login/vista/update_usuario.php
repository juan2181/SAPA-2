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


</div><!-- /.container  general-->
<?php include 'partials/footer.php';



$id=$_GET['id'];
$sql="SELECT * FROM usuarios WHERE id='".$id."'";
$resultado = mysqli_query($conexion, $sql);


while($mostrar = mysqli_fetch_assoc($resultado)) {
    ?>
    <br>

<h1>Actualizacion de dispositivos</h1>
  <br>
  <br>                 
<center>
<form method="post" action="update_usuario_code.php" onsubmit="return confirmation()"  >
              
                   
                    <p>
                                <form role="form">
                            <div class="col-sm-2 col-form-label">
                                <label >id</label>
                                <input type="text" class="form-control" readonly name="id" value="<?php echo $mostrar['id']?>">
                            </div>
                    
                    <p>

                    <p>
                                <form role="form">
                            <div class="col-sm-2 col-form-label">
                                <label >Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $mostrar['nombre']?>">
                            </div>
                    
                    <p>
                               
                            <div class="col-sm-2 col-form-label">
                                <label >Usuario</label>
                                <input  type="text" class="form-control" name="usuario" value="<?php echo $mostrar['usuario']?>">
                            </div>
                            

                              <div class="col-sm-2 col-form-label">
                                <label >Email:</label>
                                <input type="text"  class="form-control" readonly name="email" value="<?php echo $mostrar['email']?>">
                              </div> 
                                 
                                 
                              <div class="col-sm-2 col-form-label">
                                <label >Contraseña:</label>
                                <input type="password"  class="form-control" name="password" value="<?php echo $mostrar['password']?>">
                              </div> 
                                </select>
                            </div>

<br>
<br>
<br>
<br>
<br>

<br>

          <button  type="submit" class="btn btn-warning btn-lg">Modificar</button>
     
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
 