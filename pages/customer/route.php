<?php 


$id_customer = $_GET["id_customer"];
$action = $_GET['action'];

if($action == "all") include("pages/customer/index.php");
else if($id_customer && $action == "detail") include("pages/customer/detail.php");
else if($id_customer && $action == "update") include("pages/customer/update.php");
else if($id_customer && $action == "delete") include("pages/customer/update.php");
else if($id_customer && $action == "add") include("pages/customer/add.php");
else include("pages/errors/not-found.php");


?>