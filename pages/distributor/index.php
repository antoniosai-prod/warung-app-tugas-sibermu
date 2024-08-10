<?php 

include ('library/pdo/connection.php');
$query = "SELECT * FROM mtd_distributor";

$listDistributor = $database->query($query)->all();
?>

<div class="container-fluid mt-4">
    
  <div class="d-flex justify-content-between align-items-center">
    <div>
        <h1>List Distributor</h1>
        <p class="mt-0">Menampilkan <?= count($listDistributor) ?> data</p>
    </div>
    <div>
        <button data-bs-toggle="modal" data-bs-target="#addDistributor" class="btn btn-outline-success">Add new Distributor</button>
    </div>
  </div>
  <hr>
  <table class="table table-responsive table-condensed table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($listDistributor as $index => $distributor) { ?>
      <tr>
        <td><?= $index+1 ?></td>
        <td><?= $distributor['nama'] ?></td>
        <td><?= $distributor['alamat'] ?></td>
        <td><?= $distributor['telephone'] ?></td>
        <td><?= $distributor['email'] ?></td>
        <td>
        <a href="index.php?page=distributor&action=update&id_distributor=<?= $distributor['id_distributor'] ?>" class="btn btn-sm btn-primary">Update</a>
        <a href="index.php?page=distributor&action=delete&id_distributor=<?= $distributor['id_distributor'] ?>" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php include("pages/distributor/add.php") ?>