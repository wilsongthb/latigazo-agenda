<!DOCTYPE html>

<html>
<head>
     <meta charset="UTF-8">
     <title>AGENDA VIRTUAL</title>
     <link href="style/style.css" rel="stylesheet">
     <link  href= "bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    function open(){
        $(".ibody").slideDown("slow");
    }
    function close(){
        $(".ibody").slideUp("fast");
    }
    function ver(){
        $(".section").slideToggle("fast");
    } 
      </script>

</head>
<body>
 <div class=ibody>
        <div class="fcontacto">
            <div class="cerrar"><a href="javascript:close();">x</a></div>
        <form method=POST  id="fcontacto" action="index.php">
            
             <label></label>
             <input type='text' name="nombre" class="form-control" placeholder="Nombre">
             <div class="row">
                <div class="col-md-6">
                    <label></label>
                    <input type='text' name="paterno"  class="form-control"   placeholder="Ap. Paterno">
                </div>
                    <div class="col-md-6">
                        <label></label>
                        <input type='text' name="materno" id="Ap. materno" class="form-control"placeholder="Ap. Materno">
                    </div>
                </div>
                   <label></label>
                    <input type='text' name="cargo"  class="form-control" placeholder="Cargo">
                    <label></label>
                    <input type='text' name="correo" class="form-control" placeholder="Correo Institucional">
                    <label></label>
                        <div>   
                            <div class="form-group">
                                <select class="from-control">
                                <option>Oficina</option>
                                <option>Escuela</option>
                                </select>     
                            </div>
                        </div>
                     <input type='text' name="oficina" id="" class="form-control" >
                    <div class="row">
                            <div class="col-md-6">
                                <label></label>
                                <input type='text' name="telefono"  class="form-control"   placeholder="Telefono Fijo">
                            </div>

                            <div class="col-md-6">
                                <label></label>
                                <input type='text' name="ip"  class="form-control" placeholder="Telefono Fijo">
                            </div>
                    </div>
                     <label></label>
                     <input type='text' name="celular"  class="form-control" placeholder="Celular">
                     <div class="row">
                        <div class="col-md-8">
                            <label>FOTO</label>
                           <input type="file"  class="form-control-file"  name="Foto">
                        </div>
                    </div>
                    <div>
                       
                        <input type='submit'  class="btn btn-success btn-sm" name="insert" value='GUARDAR'>
                    </div>
                </form>
          
    <?php 
	if(isset($_POST['insert'])){
        
        $nombres = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        $cargo = $_POST['cargo'];
        $correo = $_POST['correo'];
        $oficina = $_POST['oficina'];
        $fijo = $_POST['telefono'];
        $ip = $_POST['ip'];
        $celular = $_POST['celular'];
        $insertar = "INSERT INTO datos (nombre,paterno,materno,cargo,correo,oficina,telefono,ip,celular) values ('$nombres','$paterno','$materno','$cargo','$correo','$oficina','$fijo','$ip','$celular')";

        $ejecutar = mysqli_query($con,$insertar);
	
		if($ejecutar){
		
		echo true;
		}
	}
	
	?> 
        </div>
    </div>
    <div id="contenedor"> 
    <header>
        <h2 id="h2">AGENDA VIRTUAL</h2>
    </header>
    <section class="section">
          </br>
        <div id="encabezado">
            <input type="text" name="busca" >
            <input type="submit" name="Submit" value="buscar" />
                
    
        </div>
        </br>
         </br>
        <div id="agenda">
		<?php 
            include "controllers/conection.php";
			$consulta = "SELECT * FROM datos";
			
			$ejecutar = mysqli_query($con, $consulta); 
			
			$i = 0   ;
			
			while($fila=mysqli_fetch_array($ejecutar)){			
				$nombre = $fila['nombre'];
				$paterno = $fila['paterno']; 
				$materno = $fila['materno']; 
				$cargo = $fila['cargo'];
                $correo = $fila['correo'];
                $correo = $fila['correo'];
				$oficina = $fila['oficina']; 
				$fijo = $fila['telefono']; 
				$ip = $fila['ip'];
                $celular = $fila['celular'];
				$i++;	
		?>
        <hr color="#246396" size="2" width="100%">
		<table>
        <tr align="center" border="2px">
            <tr><div id="foto"></div></tr>
            <tr><h2><?php echo $oficina; ?></h2></tr></br>
            <tr><h3><?php echo $cargo; ?></h3></tr></br>
            <tr><?php echo $nombre; ?></tr></br>
			<tr><?php echo $paterno; ?></tr>
			<tr><?php echo $materno; ?></tr></br>
            <tr><?php echo $correo; ?></tr></br>
            <tr><label>TELEFONO: </label><?php echo $fijo; ?></tr></br>
            <tr><label>TELEFONO IP:</label><?php echo $ip; ?></tr></br>
            <tr><label>CELULAR:</label><?php echo $celular; ?></tr>
		</tr>
    
        </table>
		<?php } ?>
	
        </div>
    </section>
    <aside>
         <img src="http://portal.unap.edu.pe/sites/default/files/UNAPUNO.png">
        </br>
        </br>
            <a href="javascript:open();"><button id="btn1">NUEVO DATO</button></a>
            <a href="javascript:ver();"><button id="btn2">VER AGENDA</button></a>
    </aside>
    <foter>
    </foter>
</div>
</body>
</html>