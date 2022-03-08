<?php include("../template/cabecera.php"); ?>

<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../configuracion/bd.php");

switch($accion){
       case "Agregar";
              $sentenciaSQL= $conexion->prepare("INSERT INTO servicios (nombreservi, imagenservi) VALUES (:nombreservi,:imagenservi);");
              $sentenciaSQL->bindParam(':nombreservi',$txtNombre);

              $fecha= new DateTime();
              $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
              
              $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

              if($tmpImagen!=""){
                  move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
              }
              
              $sentenciaSQL->bindParam(':imagenservi',$nombreArchivo);
              $sentenciaSQL->execute();    
             
         break;

      case "Modificar";

            $sentenciaSQL= $conexion->prepare("UPDATE servicios SET nombreservi=:nombreservi WHERE codigoservi=:codigoservi" );
            $sentenciaSQL->bindParam(':nombreservi',$txtNombre);
            $sentenciaSQL->bindParam(':codigoservi',$txtID);
            $sentenciaSQL->execute();

            if($txtImagen!=""){
                 $sentenciaSQL= $conexion->prepare("UPDATE servicios SET imagenservi=:imagenservi WHERE codigoservi=:codigoservi" );
                 $sentenciaSQL->bindParam(':imagenservi',$txtImagen);
                 $sentenciaSQL->bindParam(':codigoservi',$txtID);
                 $sentenciaSQL->execute();
            }

            break;
    
       case "Cancelar";
            echo "Presionado boton cancelar";
            break;

       case "Seleccionar";

            $sentenciaSQL= $conexion->prepare("SELECT * FROM servicios WHERE codigoservi=:codigoservi" );
            $sentenciaSQL->bindParam(':codigoservi',$txtID);
            $sentenciaSQL->execute();
            $servicio=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $txtNombre=$servicio['nombreservi'];
            $txtImagen=$servicio['imagenservi'];
           // echo "Presionado boton Seleccionar";
            break;

       case "Borrar";

            $sentenciaSQL= $conexion->prepare("DELETE FROM servicios WHERE codigoservi=:codigoservi");
            $sentenciaSQL->bindParam(':codigoservi',$txtID);
            $sentenciaSQL->execute();
            //echo "Presionado boton Borrar";
            break;
}
$sentenciaSQL= $conexion->prepare("SELECT * FROM servicios" );
$sentenciaSQL->execute();
$listaservicios=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de los servicios GYM
        </div>

        <div class="card-body">
            
        <form method="POST" entype="multipart/form-data">

              <div class = "form-group">
                  <label for="txtID">Codigo</label>
                  <input type="text" class="form-control" value="<?php echo $txtID; ?>" id="txtID" name="txtID" placeholder="Ingrese codigo">
             </div>
             
             <div class = "form-group">
                 <label for="txtID">Nombre:</label>
                 <input type="text" class="form-control" value="<?php echo $txtNombre; ?>" id="txtNombre" name="txtNombre" placeholder="Ingrese el servicio">
             </div>
            
              <div class = "form-group">
                   <label for="txtID">Imagen:</label>

                   <?php echo $txtImagen; ?>

                   <input type="file" class="form-control" id="txtImagen" name="txtImagen" placeholder="Ingrese codigo">
             </div>
            
             <div class="btn-group" role="group" aria-label="">
                   <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                   <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                   <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
             </div>
         </form>
        </div>
    </div>

   
</div>

<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
         <?php foreach($listaservicios as $servicio) {  ?>   
            <tr>
                <td><?php echo $servicio['codigoservi'] ?></td>  
                <td><?php echo $servicio['nombreservi'] ?></td>
                <td><?php echo $servicio['imagenservi'] ?></td>

                <td>
                      <form method="post">
                           <input type="hidden" name="txtID" id="txtID" value="<?php echo $servicio['codigoservi']; ?>"/>
                           <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
                           <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>
                      </form>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>



<?php include("../template/pie.php"); ?>