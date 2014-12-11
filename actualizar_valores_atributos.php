<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("lock.php");
$contador=0;
$comp = $_SESSION['compañia_id'];
if(isset($_POST['id_proyecto'])){
	$id_proyecto=$_POST['id_proyecto'];
	$query = mysql_query("SELECT fe_ftc_id FROM crm_fe_flujo_estado WHERE fe_fljt_id = 1 AND fe_com_id =$comp");
	$result = mysql_fetch_array($query);
	if($result['fe_ftc_id'] == 2){
		$alguardar = mysql_query("CALL sp_proyecto($id_proyecto)");  
	}
}

$arregloRecibido=  unserialize($_POST['arreglo']);
$arreglo2=  unserialize($_POST['pasosArreglo']);

foreach($_POST as $nombre_campo => $valor){
	// el arreglo que contiene los datos que me enviaron del archivo con donde trabajan los pasos se llama datos y se va llenando de forma dinamica
	if($nombre_campo!="arreglo"&&$nombre_campo!="idPaso"&&$nombre_campo!="pasosArreglo"&&$nombre_campo!="respuesta"&&$nombre_campo!="id_proyecto"){
		$asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; 
		echo $asignacion.'<br/>';
		echo $result['id_cierre_estdflj'];
		$datos[$contador]=$valor;
		$contador=$contador+1;
	}
}

//el arreglo esta seriablizado y en esta linea hago el deserialize para tener los datos que el usuario introdujo en la pantalla de trabajo de las variables...
for($n=0; $n<count($arregloRecibido); $n++){
	$update = "Update crm_proatr_proatributo set proatr_valor=  '$datos[$n]' where proatr_fljp_id=$arreglo2[$n] and proatr_atr_id=$arregloRecibido[$n] and proatr_proy_id=$id_proyecto";
	$resultado=  mysql_query($update);
}

if (isset($_SESSION["back"])){
	if($_SESSION["back"]==1){
		$_SESSION["back"]=0;
		header("location:indexProyectosCliente.php");
		$_SESSION['idWork']="";
		$_SESSION['proy_nombre']="";
		$_SESSION['cliente']="";
		$_SESSION['proy_id']="";
	}
	else{
		header("location:indexProyectos.php");
		$_SESSION['idWork']="";
		$_SESSION['proy_nombre']="";
		$_SESSION['cliente']="";
		$_SESSION['proy_id']="";
	}
}
else{
	header("location:indexProyectos.php");
		$_SESSION['idWork']="";
		$_SESSION['proy_nombre']="";
		$_SESSION['cliente']="";
		$_SESSION['proy_id']="";
}


?>