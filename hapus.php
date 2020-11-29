<?php

    include "koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama buku1
    if (isset($_GET['NIM'])) {
        $NIM=htmlspecialchars($_GET["NIM"]);

        $sql="delete from DAFTAR_MAHASISWA where NIM='$NIM' ";
        $result=mysqli_query($con,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($result) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>