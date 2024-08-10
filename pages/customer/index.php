<?php 

include ('library/pdo/connection.php');
$query = "SELECT * FROM mtd_customer";

$listCustomer = $database->query($query)->all();

?>

<div class="container-fluid mt-4">
    
  <div class="d-flex justify-content-between align-items-center">
      <div>
          <h1>List Customer</h1>
          <p class="mt-0">Menampilkan <?= count($listCustomer) ?> data</p>
      </div>
      <div>
      <button data-bs-toggle="modal" data-bs-target="#addcustomer" class="btn btn-outline-success">Add new Customer</button>
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
      <?php foreach($listCustomer as $index => $customer) { ?>
      <tr>
        <td><?= $index+1 ?></td>
        <td><?= $customer['nama'] ?></td>
        <td><?= $customer['alamat'] ?></td>
        <td><?= $customer['telephone'] ?></td>
        <td><?= $customer['email'] ?></td>
        <td>
        <a href="index.php?page=customer&action=update&id_customer=<?= $customer['id_customer'] ?>" class="btn btn-sm btn-primary">Update</a>
        <a href="index.php?page=customer&action=delete&id_customer=<?= $customer['id_customer'] ?>" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php include("pages/customer/add.php") ?>