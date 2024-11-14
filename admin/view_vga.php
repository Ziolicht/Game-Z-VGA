
<?php
require_once '../config/config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vga-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .table td {
            vertical-align: middle;
        }
        
        .tdp-badge {
            width: 60px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-4 mb-4">
        <div class="card shadow">

            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Daftar VGA Gaming</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Nama VGA</th>
                                <th>Manufacturer</th>
                                <th>Harga</th>
                                <th>Chipset</th>
                                <th>Memory</th>
                                <th>TDP</th>
                                <th>Stok</th>
                                <th>Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                $produk = viewVga($koneksi);

                                if($produk == 0)
                                    echo 'barang kosong';
                                else {
                                    foreach($produk as $rec) {
                            ?>
                            <tr>
                                <td class="fw-bold"><?= $rec['nama'] ?></td>
                                <td class="fw-bold"><?= $rec['manufacturer'] ?></td>
                                <td class="fw-bold"><?= $rec['harga'] ?></td>
                                <td class="fw-bold"><?= $rec['chipset'] ?></td>
                                <td class="fw-bold"><?= $rec['memory_size'] ?></td>
                                <td class="fw-bold"><?= $rec['tdp_watt'] ?></td>
                                <td class="fw-bold"><?= $rec['stok'] ?></td>
                                <td class="fw-bold"><?= $rec['gambar'] ?></td>
                                <td>
                            </tr>
                            <?php 
                                    }
                                }
                            ?>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

