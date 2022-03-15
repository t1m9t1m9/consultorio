<?php
$conn=new PDO('mysql:host=localhost; dbname=consultorio', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
    $cedu = Yii::app()->user->name;
 $move =  move_uploaded_file($temp,"protected/views/upload_download/upload/".$fname);
 if($move){
 	$query=$conn->query("insert into upload(ci,name,fname)values('$cedu','$name','$fname')");
//	if($query){
//	header("location:protected/views/upload_download/indexarchivos.php");
//	}
//	else{
//	die(mysql_error());
//	}
 }
}
 $pathDescarga = "/protected/views/upload_download/upload/";
 $file = "20220313045427_mpdf.pdf";

//echo Yii::app()->request->sendFile(Yii::getPathOfAlias('webroot').'protected/views/upload_download/upload/20220313045427_mpdf.pdf','click me');
//echo Yii::app()->getRequest()->sendFile('protected/views/upload_download/upload/20220313045427_mpdf.pdf');

?>
<html>
<head>
<title>Cargar Documentos</title>
<!--		<link href="protected/views/upload_download/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">-->
<!--        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">-->
</head>
<!--	<script src="protected/views/upload_download/js/jquery.js" type="text/javascript"></script>-->
<!--	<script src="protected/views/upload_download/js/bootstrap.js" type="text/javascript"></script>-->
<!--	-->
<!--	<script type="text/javascript" charset="utf-8" language="javascript" src="protected/views/upload_download/js/jquery.dataTables.js"></script>-->
<!--	<script type="text/javascript" charset="utf-8" language="javascript" src="protected/views/upload_download/js/DT_bootstrap.js"></script>-->

<style>
</style>
<body>
<!--<p><a href="protected/views/upload_download/descargar.php?path=/upload/20220313045427_mpdf.pdf">Download TEXT file</a></p> -->
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h1 align="center"><p>Descargar Documentos</p></h1>
		<br />
		<br />
<!--                    --><?php
//                    $mysqli = new mysqli('localhost', 'root', '', 'consultorio');
//                    ?>
<!--                    <div>-->
<!--                        <p>Seleccione un usuario:-->
<!--                            <select class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">-->
<!--                                <option value="0">Seleccione un Usuario</option>-->
<!--                                --><?php
//                                $query = $mysqli -> query ("SELECT * FROM usuario");
//                                while ($valores = mysqli_fetch_array($query)) {
//                                    echo '<option value="'.$valores['ci'].'">'.$valores['nombreCompleto'].'</option>';
//                                }
//                                ?>
<!--                            </select>-->
<!--                        </p>-->
<!--                    </div>-->

                    Tipo de Solicitud:
                    <select class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        <option value="Select">Seleccione una Opcion</option>}
                        <option value="RECETAS">RECETAS</option>
                        <option value="CERTIFICADO MEDICO">CERTIFICADO MEDICO</option>
                        <option value="PEDIDO DE IMAGENES">PEDIDO DE IMAGENES</option>
                        <option value="PEDIDO DE LABORATORIO">PEDIDO DE LABORATORIO</option>
                    </select>
                    <br />
                    <br />
<!--			<form enctype="multipart/form-data" action="" name="form" method="post">-->
<!--				Seleccione Archivo:-->
<!--					<input type="file" name="file" id="file" class="btn btn-primary"/></td><br><br>-->
<!--					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Cargar Archivo" />-->
<!--			</form>-->
<!--		<br />-->
<!--		<br />-->
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Archivos</th>
					<th align="center">Accion</th>	
				</tr>
			</thead>
			<?php
           // $cedula = Yii::app()->user->name;
//			$query=$conn->query("select * from upload where ci='$cedula'");
            $query=$conn->query("select * from upload order by id desc");
            while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
                    <button class="alert-success"><a href="protected/views/upload_download/descargar.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Descargar</a></button>
<!--                    <button class="alert-success"><a href="protected/views/upload_download/descargar.php?filename=--><?php //echo $name;?><!--&f=--><?php //echo $row['fname'] ?><!--">Descargar</a></button>-->
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
</body>
</html>