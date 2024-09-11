<?php 


$id_barang = $_GET["id_barang"];
$action = $_GET['action'];

if($action == "all") include("pages/barang/index.php");
else if($id_barang && $action == "detail") include("pages/barang/detail.php");
else if($id_barang && $action == "update") include("pages/barang/update.php");
else if($id_barang && $action == "delete") include("pages/barang/delete.php");
else if($action == "add") include("pages/barang/add.php");
else include("pages/errors/not-found.php");


?>