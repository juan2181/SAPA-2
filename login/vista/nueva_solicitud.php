
<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    
<?php 
include 'partials/head.php';
$conexion = mysqli_connect("localhost", "root", "Puruandiro1", "sapa");


?>

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
									<a  href="cerrar-sesion.php" class="btn btn-danger">Cerrar sesión  </a>



									<a href="#" class="btn btn-info">Corte de caja</a>
									<a href="panel_control.php" class="btn btn-warning">Panel de control</a>
								</p>
					    </div>
			     </div>
		</div> <!-- starter-template -->


<?php
$hoy = time();
?>




<body>
    



				<div> <!-- contenedor Principal -->
					<div> <!-- contenedor Busqueda -->
						<h2 class=".titulo">Registro de contratos</h2>
						
				
						<form method="post" name="formulario" action="nueva_solicitud_2.php" >
                    

                                 <div class="form-group ">
                                <label>RPU</label>
                                <input type="text" readonly name="rpu" value="<?php echo $hoy; ?>" class="form-control">
                                </div>


                            <div class="form-group ">
								<label>Nombre</label>
								<input type="text" pattern="[A-Za-z]+" name="nombre" required class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" autofocus>
							</div>

                            <div class="row">
                            <div class="col-sm-8">
                            <label>Calle</label>
                            <input type="text" name="calle"  class="form-control" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>


                            <label>Numero</label>
                            <div class="col-sm-4">
                            <input type="text"  name="numero" pattern="[0-9]+" required class="form-control" >
                            </div>
                            </div>

                            <br>


                            <div class="form-group"> 
                            <label>Colonia</label>
                           
                            <select name="colonia" class="form-control" required>
                                <option value="">Seleccione una colonia</option>
                        <?php
                                $conexion=mysqli_connect('localhost','root','Puruandiro1','sapa');
                                $sql="SELECT * from colonias ORDER BY id_colonia";
                                $result=mysqli_query($conexion, $sql);
                                while($mostrar=mysqli_fetch_array($result))
                                {
                                echo '<option value="'.$mostrar['nombre_col'].'">'.$mostrar['nombre_col'].'</option>';
                        }
                        ?>
                            </select>
                        </div>





							<div class="form-group">
								<label>Localidad</label>
								<input type="text" name="localidad" required class="form-control">
							</div>


							

                            <div class="form-group"> 
                            <label>Codigo Postal</label>
                           
                            <select name="codigo_postal" class="form-control" required>
                                <option value="">Seleccione</option>
                        <?php
                                $conexion=mysqli_connect('localhost','root','Puruandiro1','sapa');
                                $sql="SELECT * from codigo_postal ORDER BY id_codigo_postal";
                                $result=mysqli_query($conexion, $sql);
                                while($mostrar=mysqli_fetch_array($result))
                                {
                                echo '<option value="'.$mostrar['codigo_postal'].'">'.$mostrar['codigo_postal'].'</option>';
                        }
                        ?>
                            </select>
                        </div>

							<div class="form-group">
								<label>Telefono</label>
								<input type="tel" name="telefono" id="Telefono"  pattern="[0-9]{10}" required  class="form-control" placeholder="(Código de área) Número">
							</div>



                            <div class="form-group"> 
                            <label>Tarifa</label>
                           
                            <select name="tarifa" class="form-control" required>
                                <option value="">Seleccione</option>
                        <?php
                                $conexion=mysqli_connect('localhost','root','Puruandiro1','sapa');
                                $sql="SELECT * from tarifas ORDER BY id_tarifa";
                                $result=mysqli_query($conexion, $sql);
                                while($mostrar=mysqli_fetch_array($result))
                                {
                                echo '<option value="'.$mostrar['nombre_tarifa'].'">'.$mostrar['nombre_tarifa'].'</option>';
                        }
                        ?>
                            </select>
                        </div>



							<div class="form-group">
                                <label>Estatus</label>
                                <select type="text" class="form-control" required name="estatus" >
                                    <option> </option>    
                                    <option>1</option>
                                    <option>0</option>
                                </select>
                            </div>


							<div class="form-group">
								<label>#Medidor</label>
								<input type="number" name="medidor" class="form-control">
							</div>



							<?php
                        date_default_timezone_set('America/Bogota');
                        $hoy=getdate(); 
                        if($hoy["mon"] < 10){
                            $mes="0".$hoy["mon"];
                        }
                        else{
                            $mes=$hoy["mon"];
                        }
                        if($hoy["mday"] < 10){
                            $dia="0".$hoy["mday"];
                        }
                        else{
                            $dia=$hoy["mday"];
                        }
                        $fecha=$hoy["year"]."-".$mes."-".$dia; 
                        ?>
                    
                              <div class="form-group">
                                <label >Fecha de alta:</label>
                                <input type="date" value="<?php echo $fecha; ?>" class="form-control" name="fecha_alta" >
                              </div> 







                           <center>
                            <p>
                                <input class="btn btn-success btn-lg" type="submit" value="Aceptar"/>
                            </p>     
                        	</center>
						</form> 

						</div> <!-- contenedor Busqueda -->

							


				</div> <!-- contenedor Principal -->

                </body>			


 <script>
javascript:this.value=this.value.toUpperCase(); por javascript:this.value=this.value.toLowerCase();
</script>
