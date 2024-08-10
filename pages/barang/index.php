<?php 

include ('library/pdo/connection.php');
$query = "
SELECT 
    b.id_barang,
    b.barcode,
    b.nama_barang,
    b.stok_sisa,
    b.harga_beli,
    b.harga_jual,
    b.satuan,
    b.barcode,
    d.id_distributor,
    d.nama AS distributor_nama,
    d.alamat AS distributor_alamat,
    d.telephone AS distributor_telephone,
    d.email AS distributor_email
FROM 
    mtd_barang b
JOIN 
    mtd_distributor d ON b.id_distributor = d.id_distributor;
";

$listBarang = $database->query($query)->all();

?>

<div class="container-fluid mt-4">
  
    
  <div class="d-flex justify-content-between align-items-center">
    <div>
        <h1>List Barang</h1>
        <p class="mt-0">Menampilkan <?= count($listBarang) ?> data</p>
    </div>
    <div>
        <a href="#" class="btn btn-outline-success">Add new Item</a>
    </div>
  </div>
  <hr>
  <table class="table table-responsive table-condensed table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Satuan</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok Sisa</th>
        <th>Distributor</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($listBarang as $index => $barang) { ?>
      <tr>
        <td><?= $index+1 ?></td>
        <td><?= $barang['nama_barang'] ?></td>
        <td><?= $barang['satuan'] ?></td>
        <td>Rp. <?= number_format($barang['harga_jual']) ?></td>
        <td>Rp. <?= number_format($barang['harga_beli']) ?></td>
        <td><?= $barang['stok_sisa'] ?></td>
        <td><?= $barang['distributor_nama'] ?></td>
        <td>
          <a href="index.php?page=barang&action=update&id_barang=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-primary">Update</a>
          <a href="index.php?page=barang&action=delete&id_barang=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>