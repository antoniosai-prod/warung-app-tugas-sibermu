<?php include('layouts/header.php') ?>

<div class="container-fluid">
<?php
  // Getting page data
  $activePage = $_GET['page'];
  
  if($activePage == "barang") include("pages/barang/route.php");
  else if($activePage == "home") include("pages/home/route.php");
  else if($activePage == "transaction") include("pages/transaction/route.php");
  else if($activePage == "distributor") include("pages/distributor/route.php");
  else if($activePage == "customer") include("pages/customer/route.php");
  else include("pages/errors/not-found.php");
?>
</div>

<?php include('layouts/footer.php') ?>
