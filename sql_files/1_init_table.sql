-- Table: mtd_distributor
CREATE TABLE `mtd_distributor` (
    `id_distributor` INT AUTO_INCREMENT PRIMARY KEY,
    `nama` VARCHAR(255) NOT NULL,
    `alamat` VARCHAR(255) NOT NULL,
    `telephone` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL
);

-- Table: mtd_barang
CREATE TABLE `mtd_barang` (
    `id_barang` INT AUTO_INCREMENT PRIMARY KEY,
    `id_distributor` INT NOT NULL,
    `barcode` VARCHAR(255) NOT NULL,
    `nama_barang` VARCHAR(255) NOT NULL,
    `stok_sisa` INT NOT NULL DEFAULT 0,
    `harga_beli` INT NOT NULL DEFAULT 0,
    `harga_jual` INT NOT NULL DEFAULT 0,
    `satuan` VARCHAR(50) NOT NULL,
    FOREIGN KEY (`id_distributor`) REFERENCES `mtd_distributor`(`id_distributor`)
);

-- Table: mtd_customer
CREATE TABLE `mtd_customer` (
    `id_customer` INT AUTO_INCREMENT PRIMARY KEY,
    `nama` VARCHAR(255) NOT NULL,
    `alamat` VARCHAR(255) NOT NULL,
    `telephone` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL
);

-- Table: trx_penjualan_header
CREATE TABLE `trx_penjualan_header` (
    `id_trx_penjualan_header` INT AUTO_INCREMENT PRIMARY KEY,
    `discount` INT NOT NULL DEFAULT 0,
    `total_belanja` INT NOT NULL,
    `tanggal_transaksi` DATE NOT NULL,
    `id_customer` INT NOT NULL,
    FOREIGN KEY (`id_customer`) REFERENCES `mtd_customer`(`id_customer`)
);

-- Table: trx_penjualan_item
CREATE TABLE `trx_penjualan_item` (
    `id_trx_penjualan_item` INT AUTO_INCREMENT PRIMARY KEY,
    `qty` INT NOT NULL,
    `total_harga` INT NOT NULL,
    `diskon` INT NOT NULL DEFAULT 0,
    `potongan_harga` INT NOT NULL DEFAULT 0,
    `id_trx_penjualan_header` INT NOT NULL,
    `id_barang` INT NOT NULL,
    FOREIGN KEY (`id_trx_penjualan_header`) REFERENCES `trx_penjualan_header`(`id_trx_penjualan_header`),
    FOREIGN KEY (`id_barang`) REFERENCES `mtd_barang`(`id_barang`)
);
