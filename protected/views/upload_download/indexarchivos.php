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
	if($query){
//	header("location:protected/views/upload_download/indexarchivos.php");
	}
	else{
	die(mysql_error());
	}
 }
}
?>
<html>
<head>
<title>Subir Recetas</title>
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
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h1 align="center"><p>Subir Recetas</p></h1>
		<br />
		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
				Seleccione Archivo:
					<input type="file" name="file" id="file" /></td>
					<input type="submit" name="submit" id="submit" value="Subir" />
			</form>
		<br />
		<br />
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
					<button class="alert-success"><a href="protected/views/upload_download/download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Descargar</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
</body>
</html>