-- Inserting data into mtd_distributor
INSERT INTO `mtd_distributor` (`nama`, `alamat`, `telephone`, `email`) VALUES
('Distributor A', '1234 Elm Street, Springfield', '555-1234', 'distributorA@example.com'),
('Distributor B', '5678 Oak Avenue, Shelbyville', '555-5678', 'distributorB@example.com'),
('Distributor C', '9101 Pine Road, Ogdenville', '555-9101', 'distributorC@example.com'),
('Distributor D', '2345 Maple Lane, Capital City', '555-2345', 'distributorD@example.com'),
('Distributor E', '6789 Cedar Street, North Haverbrook', '555-6789', 'distributorE@example.com'),
('Distributor F', '1112 Birch Boulevard, Brockway', '555-1112', 'distributorF@example.com'),
('Distributor G', '1314 Cherry Circle, Ogdenville', '555-1314', 'distributorG@example.com'),
('Distributor H', '1516 Walnut Way, North Haverbrook', '555-1516', 'distributorH@example.com'),
('Distributor I', '1718 Aspen Alley, Shelbyville', '555-1718', 'distributorI@example.com'),
('Distributor J', '1920 Poplar Place, Springfield', '555-1920', 'distributorJ@example.com');

-- Inserting data into mtd_barang
INSERT INTO `mtd_barang` (`id_distributor`, `nama_barang`, `stok_sisa`, `harga_beli`, `harga_jual`, `satuan`) VALUES
(1, 'Product A', 100, 5000, 6000, 'pcs'),
(2, 'Product B', 200, 10000, 12000, 'pcs'),
(3, 'Product C', 150, 8000, 9500, 'pcs'),
(4, 'Product D', 250, 6000, 7500, 'pcs'),
(5, 'Product E', 300, 12000, 14000, 'pcs'),
(6, 'Product F', 120, 7000, 8500, 'pcs'),
(7, 'Product G', 180, 5000, 6500, 'pcs'),
(8, 'Product H', 220, 9000, 11000, 'pcs'),
(9, 'Product I', 90, 4500, 5500, 'pcs'),
(10, 'Product J', 160, 7500, 9000, 'pcs'),
(1, 'Product K', 130, 7000, 8200, 'pcs'),
(2, 'Product L', 175, 5000, 6800, 'pcs'),
(3, 'Product M', 95, 9500, 11500, 'pcs'),
(4, 'Product N', 110, 4000, 5200, 'pcs'),
(5, 'Product O', 85, 13000, 15500, 'pcs'),
(6, 'Product P', 140, 6800, 8000, 'pcs'),
(7, 'Product Q', 170, 7600, 9200, 'pcs'),
(8, 'Product R', 125, 11000, 13000, 'pcs'),
(9, 'Product S', 155, 5400, 7000, 'pcs'),
(10, 'Product T', 205, 8100, 9800, 'pcs');

-- Inserting data into mtd_customer
INSERT INTO `mtd_customer` (`nama`, `alamat`, `telephone`, `email`) VALUES
('Customer 1', '100 Main Street, Springfield', '555-0100', 'customer1@example.com'),
('Customer 2', '200 High Street, Shelbyville', '555-0200', 'customer2@example.com'),
('Customer 3', '300 Park Avenue, Ogdenville', '555-0300', 'customer3@example.com'),
('Customer 4', '400 Broadway, Capital City', '555-0400', 'customer4@example.com'),
('Customer 5', '500 Ocean Drive, North Haverbrook', '555-0500', 'customer5@example.com'),
('Customer 6', '600 Sunset Boulevard, Brockway', '555-0600', 'customer6@example.com'),
('Customer 7', '700 Lakeshore Road, Ogdenville', '555-0700', 'customer7@example.com'),
('Customer 8', '800 Forest Lane, North Haverbrook', '555-0800', 'customer8@example.com'),
('Customer 9', '900 Valley View, Shelbyville', '555-0900', 'customer9@example.com'),
('Customer 10', '1000 Mountain Road, Springfield', '555-1000', 'customer10@example.com'),
('Customer 11', '1100 River Street, Springfield', '555-1100', 'customer11@example.com'),
('Customer 12', '1200 Hilltop Avenue, Shelbyville', '555-1200', 'customer12@example.com'),
('Customer 13', '1300 Maple Avenue, Ogdenville', '555-1300', 'customer13@example.com'),
('Customer 14', '1400 Garden Street, Capital City', '555-1400', 'customer14@example.com'),
('Customer 15', '1500 Lake View, North Haverbrook', '555-1500', 'customer15@example.com');
