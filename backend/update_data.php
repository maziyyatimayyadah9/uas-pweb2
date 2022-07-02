<?php

require_once('../connection.php');

$getJSON = file_get_contents('php://input');
$data = json_decode($getJSON);
$id = $data->id;
$merk_laptop = $data->merk_laptop;
$seri_laptop = $data->seri_laptop;
$tahun_produksi = $data->tahun_produksi;

$query = "UPDATE laptop set merk_laptop='$merk_laptop',seri_laptop='$seri_laptop',tahun_produksi='$tahun_produksi' where id=".$id;
$result = pg_query($query);
$row = pg_affected_rows($result);

$obj = new stdClass();
if($row > 0){
    $obj->status = "success";
}else{
    $obj->status = "Fail";
}
echo json_encode($obj);


?>