<?php 
 require_once "koneksi.php";
 $Cari=$_POST['id_cari'];
 $sql = "SELECT * FROM DAFTAR_MAHASISWA WHERE Nama LIKE '%$Cari%'";
 $result = mysqli_query($con, $sql);
?>
<html>
 <head>
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 </head>

 <div class="container">	

  <body>
    <table class="table table-striped">
      <td>
        <a href="index.php" class="btn btn-warning" role="button"> Kembali </a>
      </td>
    </table>

   <table class="table table-striped" border=1px>
   <tr>
	   <th>NIM</th>
	   <th>Nama</th>
	   <th>Tempat Lahir</th>
	   <th>Tanggal Lahir</th>
	   <th>Fakultas</th>
     <th>Jurusan</th>
     <th>IPK</th>
   </tr>
   <?php while ($data = mysqli_fetch_row($result)): ?>
    <tr>
    	<td><?php echo $data[0]; ?></td>
      <td><?php echo $data[1]; ?></td>
      <td><?php echo $data[2]; ?></td>      
      <td><?php echo $data[3]; ?></td>   
      <td><?php echo $data[4]; ?></td>
      <td><?php echo $data[5]; ?></td>
      <td><?php echo $data[6]; ?></td>
    </tr>	
   <?php endwhile; ?>
   </table>
  </body>
</div>
</html>
<?php
  // Membebaskan sumber daya hasil query
  mysqli_free_result($result);
  // Menutup koneksi dengan menggunakan fungsi umum
  db_disconnect($con);
?>