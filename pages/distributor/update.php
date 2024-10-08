<?php
// Process SUMIT Form

include ('library/pdo/connection.php');

$id_distributor = $_GET['id_distributor'];

$query = "SELECT * FROM mtd_distributor WHERE id_distributor = $id_distributor";

$customerData = $database->query($query)->first();

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $data_insert = [
    'nama' => $_POST['nama'],
    'telephone' => $_POST['telephone'],
    'alamat' => $_POST['alamat'],
    'email' => $_POST['email'],
  ];
  

  $executingSql = $database->update('mtd_distributor', $data_insert, ['id_distributor' => $id_distributor]);

  if($executingSql) {
    header("Location: index.php?page=distributor&action=all");
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
            <label for="nama">Nama Distributor</label>
            <input type="text" require placeholder="Masukan nama Distributor" value="<?= $customerData['nama'] ?>" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">Alamat</label>
            <input type="text" require placeholder="Masukan Alamat Distributor" value="<?= $customerData['alamat'] ?>" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">Telephone</label>
            <input type="text" require placeholder="Masukan No. Telephone Distributor" value="<?= $customerData['telephone'] ?>" name="telephone" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">E-Mail</label>
            <input type="email" require placeholder="Masukan E-Mail Distributor" value="<?= $customerData['email'] ?>" name="email" class="form-control">
          </div>
          <div class="pull-right mt-4">
            <button class="btn btn-outline-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>