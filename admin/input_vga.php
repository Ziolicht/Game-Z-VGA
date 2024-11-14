
<?php
    require_once "../config/config.php";


        if (isset($_POST['admin'])) {
            $errors = [];

            $nama_produk = ($_POST['nama_produk']);
            $manufacturer = $_POST['manufacturer'];
            $chipset = ($_POST['chipset']);
            $memory_size = ($_POST['memory_size']);
            $memory_type = $_POST['memory_type'];
            $tdp = ($_POST['tdp']);
            $harga = ($_POST['harga']);
            $stok = ($_POST['stok']);
            $deskripsi = ($_POST['deskripsi']);
            $gambar = basename($_FILES['gambar']['name']);

            $data = [
                'nama_produk' => $nama_produk,
                'manufacturer' => $manufacturer,
                'chipset' => $chipset,
                'memory_size' => $memory_size,
                'memory_type' => $memory_type,
                'tdp'=> $tdp,
                'harga'=> $harga,
                'stok'=> $stok,
                'deskripsi'=> $deskripsi,
                'gambar'=> $gambar
            ];
            
            $validasi = validasiData($data);
            if($validasi == 0 ){
                // echo "data sudah lengkap siap di inputkan";
                $result = vga($data, $koneksi);
                $folderTujuan = $rootDir."upload";
                if($result) 
                { 
                    $upload = tambahGambar($folderTujuan, $_FILES['gambar']);
                    if($upload) 
                        header("location:vga_base.php?status=1");
                    else 
                    header("location:vga_base.php?status=1&errno=2");
                }
                else header("location:vga_base.php?errno=1");
            }
            else {
                echo "data $validasi kurang";
            }

        }
        ?>
