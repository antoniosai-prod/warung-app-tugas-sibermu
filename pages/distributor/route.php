<?php 


$id_distributor = $_GET["id_distributor"];
$action = $_GET['action'];

if($action == "all") include("pages/distributor/index.php");
else if($id_distributor && $action == "detail") include("pages/distributor/detail.php");
else if($id_distributor && $action == "update") include("pages/distributor/update.php");
else if($id_distributor && $action == "delete") include("pages/distributor/update.php");
else if($id_distributor && $action == "add") include("pages/distributor/add.php");
else include("pages/errors/not-found.php");


?>