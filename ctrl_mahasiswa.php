<?php 
  require_once "koneksi.php"; 
  $act = $_GET['act'];
  
  if($act == "tambah") {
    $sql = "INSERT INTO DAFTAR_MAHASISWA 
              (NIM, Nama, Tempat_Lahir, Tanggal_Lahir, Fakultas, Jurusan, IPK) 
            VALUES 
              ('$_POST[txt_nim]', '$_POST[txt_nama]', 
               '$_POST[txt_tempat]', '$_POST[txt_tanggal]',
               '$_POST[txt_fakultas]','$_POST[txt_jurusan]',
               '$_POST[txt_ipk]')";           
    
    mysqli_query($con, $sql); 

    // Menutup koneksi
    db_disconnect($con);
  } 

  if($act == "update") {
    $sql = "UPDATE DAFTAR_MAHASISWA SET                       
            nama           = '$_POST[Nama]',
            tempat_lahir   = '$_POST[Tempat_Lahir]',
            tanggal_lahir  = '$_POST[Tanggal_Lahir]',
            fakultas       = '$_POST[Fakultas]',
            jurusan        = '$_POST[Jurusan]', 
            ipk            = '$_POST[IPK]'            
            WHERE nim = '$_POST[NIM]'"; 
        
    mysqli_query($con, $sql);

    db_disconnect($con);
  }

  header('location:index.php'); 
?>