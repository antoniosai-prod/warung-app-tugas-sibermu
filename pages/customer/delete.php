<?php 

  include ('library/pdo/connection.php');

  $id_customer = $_GET['id_customer']; 

  $deletingData = $database->delete('mtd_customer', ['id_customer' => $id_customer]);

  if($deletingData) {
    header("Location: index.php?page=customer&action=all");
  }
?>