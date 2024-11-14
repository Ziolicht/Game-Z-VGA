

<?php
    function validasiData($data){
        foreach($data as $produk => $value) {
            $value = trim($value);
            if($value === '' || $value === 0 || $value === null || $value === false){
                return $produk;
            }
        }
        return 0;
    }

    function vga($data, $koneksi){
        $nama_produk = $data['nama_produk'];
        $harga = $data['harga'];
        $manufacturer = $data['manufacturer'];
        $chipset = $data['chipset'];
        $memory_size = $data['memory_size'];
        $memory_type = $data['memory_type'];
        $tdp = $data['tdp'];
        $stok = $data['stok'];
        $deskripsi = $data['deskripsi'];
        $gambar = $data['gambar'];

        $sql = "INSERT INTO produk (nama,harga,manufacturer,chipset,memory_size,memory_type,tdp_watt,stok,deskripsi,gambar) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($koneksi,$sql);
        if($stmt === false) 
        {
            return "failed";
        }
        mysqli_stmt_bind_param($stmt, 'sisssssiss', $nama_produk, $harga, $manufacturer, $chipset, $memory_size,$memory_type, $tdp,$stok,$deskripsi,$gambar);
        $result = mysqli_stmt_execute($stmt);
        if (!$result)
        return false;

    mysqli_stmt_close($stmt);
    return true;
    }


    function viewVga($koneksi){
        $sql = "SELECT produk.nama,produk.manufacturer,produk.harga,produk.chipset,produk.memory_size,produk.tdp_watt,produk.stok,produk.gambar
        FROM `produk` where 1";
        $stmt = mysqli_query($koneksi, $sql);
        if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
        else return false;
    }

// function viewNama($koneksi){
//     $sql = "SELECT * FROM produk";
//     $stmt = mysqli_query($koneksi,$sql);



//     if(mysqli_num_rows($stmt) > 0 ) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
//     else return false;  
// }

// function viewManufacturer($koneksi){
//     $sql = "SELECT * FROM produk";
//     $stmt = mysqli_query($koneksi,$sql);



//     if(mysqli_num_rows($stmt) > 0 ) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
//     else return false;  

?>