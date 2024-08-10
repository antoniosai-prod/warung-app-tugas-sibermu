<?php
// Process SUMIT Form

include ('library/pdo/connection.php');

$id_customer = $_GET['id_customer'];

$query = "SELECT * FROM mtd_customer WHERE id_customer = $id_customer";

$customerData = $database->query($query)->first();

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $data_insert = [
    'nama' => $_POST['nama'],
    'telephone' => $_POST['telephone'],
    'alamat' => $_POST['alamat'],
    'email' => $_POST['email'],
  ];
  

  $executingSql = $database->update('mtd_customer', $data_insert, ['id_customer' => $id_customer]);

  if($executingSql) {
    header("Location: index.php?page=customer&action=all");
  }
}


?>

<!-- Modal -->
<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mt-4">
    <div>
        <h1>Update Customer</h1>
        <p class="mt-0">Form Edit Customer <?= $customerData['nama'] ?> data</p>
    </div>
    <div>
    </div>
  </div>
  <div class="row">
    <div class="col-md 8">
      <div class="container-fluid">
        <form action="" method="POST">
          <div class="form-group">
            <label for="nama">Nama Customer</label>
            <input type="text" require placeholder="Masukan nama Customer" value="<?= $customerData['nama'] ?>" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">Alamat</label>
            <input type="text" require placeholder="Masukan Alamat Customer" value="<?= $customerData['alamat'] ?>" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">Telephone</label>
            <input type="text" require placeholder="Masukan No. Telephone Customer" value="<?= $customerData['telephone'] ?>" name="telephone" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">E-Mail</label>
            <input type="email" require placeholder="Masukan E-Mail Customer" value="<?= $customerData['email'] ?>" name="email" class="form-control">
          </div>
          <div class="pull-right mt-4">
            <button class="btn btn-outline-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>