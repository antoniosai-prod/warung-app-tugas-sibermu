<!-- Modal -->
<div class="modal fade" id="addcustomer" tabindex="-1" aria-labelledby="addcustomerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addcustomerLabel">Add New customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php?page=customer&action=add" method="POST">
          <div class="form-group">
            <label for="nama">Nama customer</label>
            <input type="text" require placeholder="Masukan nama customer" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">Alamat</label>
            <input type="text" require placeholder="Masukan Alamat customer" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">Telephone</label>
            <input type="text" require placeholder="Masukan No. Telephone customer" name="telephone" class="form-control">
          </div>
          <div class="form-group">
            <label for="nama">E-Mail</label>
            <input type="email" require placeholder="Masukan E-Mail customer" name="email" class="form-control">
          </div>
          <div class="pull-right mt-4">
            <button class="btn btn-outline-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
// Process SUMIT Form
if($_SERVER["REQUEST_METHOD"] == "POST") {

  include ('library/pdo/connection.php');

  $data_insert = [
    'nama' => $_POST['nama'],
    'telephone' => $_POST['telephone'],
    'alamat' => $_POST['alamat'],
    'email' => $_POST['email'],
  ];
  

  $executingSql = $database->create('mtd_customer', $data_insert);

  if($executingSql) {
    header("Location: index.php?page=customer&action=all");
  }
}


?>