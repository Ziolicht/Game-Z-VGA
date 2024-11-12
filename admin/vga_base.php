<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Form Produk VGA</title>
</head>
<body>
                                            <!-- MAIN -->


    <form action="input_vga.php" method="post" enctype="multipart/form-data">
    <div class="form-container">
    <h2>Form Input Produk VGA/GPU</h2>
            <div class="form-group">
                <label for="nama_produk">Nama Produk *</label>
                <input type="text" id="nama_produk" name="nama_produk" required>
            </div>

            <div class="specs-group">
                <h3>Spesifikasi Teknis</h3>

                <div class="form-group">
                    <label for="manufacturer">Manufacturer *</label>
                    <select id="manufacturer" name="manufacturer" required>
                        <option value="0">Pilih Manufacturer</option>
                        <option value="1">MSI</option>
                        <option value="2">Gigabyte</option>
                        <option value="3">Sapphire</option>
                        <option value="4">ASUS</option>
                        <option value="5">GALAX</option>
                        <option value="6">ZOTAC</option>
                        <option value="7">NZXT</option>
                        <option value="8">MAXSUN</option>
                        <option value="9">Inno3D</option>
                        <option value="10">Colorfull</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chipset">Chipset/GPU *</label>
                    <input type="text" id="chipset" name="chipset" required>
                </div>

                <div class="form-group">
                    <label for="memory_size">Memory Size (GB) *</label>
                    <input type="number" id="memory_size" name="memory_size" min="1" required>
                </div>

                <div class="form-group">
                    <label for="memory_type">Memory Type *</label>
                    <select id="memory_type" name="memory_type" required>
                        <option value="0">Pilih Tipe Memory</option>
                        <option value="1">GDDR6X</option>
                        <option value="2">GDDR6</option>
                        <option value="3">GDDR5X</option>
                        <option value="4">GDDR5</option>
                        <option value="5">HBM2</option>
                        <option value="6">HBM2e</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="tdp">TDP (Watt)</label>
                    <input type="number" id="tdp" name="tdp" min="0" >
                </div>
            </div>

            <div class="form-group">
                <label for="harga">Harga (Rp) *</label>
                <input type="number" id="harga" name="harga" min="0" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" id="stok" name="stok" min="0" >
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Produk</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar Produk</label>
                <input type="file" id="gambar" name="gambar" accept="image/*">
                <p style="font-size: 0.9em; color: #666;">Format yang diperbolehkan: JPG, JPEG, PNG, GIF. Maksimal 5MB.</p>
            </div>
        
            <input type="submit" Value="Simpan Produk" name="admin" class="tombol">


        </form>
    </body>
    </html>