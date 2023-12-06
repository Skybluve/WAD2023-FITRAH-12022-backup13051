<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($data){

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $id = $data['id'];
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $sql = "UPDATE showroom_mobil SET mobil='$data[mobil]', brand='$data[brand]', warna='$data[warna]', tipe='$data[tipe]', harga='$data[harga]' WHERE id='$id'";
        $sql = "UPDATE tbl_mobil SET nama='".$data['nama']."', merk='".$data['merk']
        ."', warna='".$data['warna']."', tipe='".$data['tipe']."', harga='".$data['harga']."' WHERE id='".$data['id']."'";
        

        // Eksekusi perintah SQL
        mysqli_query($conn, $sql);

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: home.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    // Panggil fungsi update dengan data yang sesuai
    update($_POST);

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
}

?>