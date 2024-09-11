
<?php

$query_list_distributor = "SELECT * FROM mtd_distributor";

$listDistributor = $database->query($query_list_distributor)->all();

if($_SERVER["REQUEST_METHOD"] == "POST") {

  // $data_insert = [
  //   'id_distributor' => $_POST['id_distributor'],
  //   'nama_barang' => $_POST['nama_barang'],
  //   'harga_jual' => $_POST['harga_jual'],
  //   'harga_beli' => $_POST['harga_beli'],
  //   'satuan' => $_POST['satuan'],
  //   'barcode' => $_POST['barcode'] ? $_POST['barcode'] : generateCode128(),
  // ];

  // $executingSql = $database->create('mtd_barang', $data_insert);

  // if($executingSql) {
    header("Location: index.php?page=barang&action=all");
  // }
}


?>

<!-- Modal -->
<div class="modal fade" id="addBarang" tabindex="-1" aria-labelledby="addBarangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addBarangLabel">Add New barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php?page=barang&action=add" method="POST">
          <div class="form-group">
            <label for="id_distributor">Pilih Distributor</label>
            <select name="id_distributor" class="form-control">
              <?php foreach($listDistributor as $index => $distributor) { ?>
                <option value="<?= $distributor['id_distributor'] ?>"><?= $distributor['nama'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nama_barang">Nama barang</label>
            <input type="text" require placeholder="Masukan nama barang" name="nama_barang" class="form-control">
          </div>
          <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="number" require placeholder="Masukan Harga Beli" name="harga_beli" class="form-control">
          </div>
          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" require placeholder="Masukan Harga Jual" name="harga_jual" class="form-control">
          </div>
          <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" require placeholder="Masukan Satuan" name="satuan" class="form-control">
          </div>
          <div class="form-group">
            <label for="barcode">Barcode</label>
            <input type="text" require placeholder="Kosongkan Barcode apabila ingin digenerate Otomatis" name="barcode" class="form-control">
          </div>
          <div class="pull-right mt-4">
            <button class="btn btn-outline-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
