<?php 

  include ('library/pdo/connection.php');

  $id_distributor = $_GET['id_distributor']; 

  $deletingData = $database->delete('mtd_distributor', ['id_distributor' => $id_distributor]);

  if($deletingData) {
    header("Location: index.php?page=distributor&action=all");
  }
?>