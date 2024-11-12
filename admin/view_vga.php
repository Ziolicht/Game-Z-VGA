
<?php

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
                            <tr>
                                <td class="fw-bold">RTX 4090 Gaming X Trio</td>
                                <td>
                                    <span class="badge bg-primary">MSI</span>
                                </td>
                                <td>Rp 29.999.000</td>
                                <td>NVIDIA AD102</td>
                                <td>
                                    <span class="badge bg-info">24GB GDDR6X</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger tdp-badge">450W</span>
                                </td>
                                <td>
                                    <span class="badge bg-success">Tersedia (5)</span>
                                </td>
                                <td>
                                    <img src="/api/placeholder/100/100" alt="RTX 4090" class="vga-img">
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">RX 7900 XTX Gaming OC</td>
                                <td>
                                    <span class="badge bg-primary">Gigabyte</span>
                                </td>
                                <td>Rp 19.999.000</td>
                                <td>AMD RDNA 3</td>
                                <td>
                                    <span class="badge bg-info">24GB GDDR6</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger tdp-badge">355W</span>
                                </td>
                                <td>
                                    <span class="badge bg-warning text-dark">Terbatas (2)</span>
                                </td>
                                <td>
                                    <img src="/api/placeholder/100/100" alt="RX 7900 XTX" class="vga-img">
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">RTX 4070 Ti Gaming X</td>
                                <td>
                                    <span class="badge bg-primary">MSI</span>
                                </td>
                                <td>Rp 15.999.000</td>
                                <td>NVIDIA AD104</td>
                                <td>
                                    <span class="badge bg-info">12GB GDDR6X</span>
                                </td>
                                <td>
                                    <span class="badge bg-warning tdp-badge">285W</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Habis</span>
                                </td>
                                <td>
                                    <img src="/api/placeholder/100/100" alt="RTX 4070 Ti" class="vga-img">
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">RX 6800 XT Gaming</td>
                                <td>
                                    <span class="badge bg-primary">Sapphire</span>
                                </td>
                                <td>Rp 12.999.000</td>
                                <td>AMD RDNA 2</td>
                                <td>
                                    <span class="badge bg-info">16GB GDDR6</span>
                                </td>
                                <td>
                                    <span class="badge bg-warning tdp-badge">300W</span>
                                </td>
                                <td>
                                    <span class="badge bg-success">Tersedia (8)</span>
                                </td>
                                <td>
                                    <img src="/api/placeholder/100/100" alt="RX 6800 XT" class="vga-img">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

