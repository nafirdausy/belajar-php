<?php 

if(isset($_GET['id'])){
    // ambil id dari get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_error();
        exit();
    }else{
        echo 'Koneksi Berhasil';
    }

    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "Hapus data berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}

?>