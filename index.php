<?php
  require_once "koneksi.php";
  $sql = "SELECT * FROM DAFTAR_MAHASISWA";
  $result = mysqli_query($con, $sql);

?>
<html>
 <head>
  <title>DAFTAR MAHASISWA_WIWIED WIDYASARI (19108002)</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 </head>	
 <div class="container">
  <br>
  <h4>Daftar Mahasiswa</h4>
  <br>

    <body>
      <form action='hasil_cari.php' METHOD='POST'>
        <input type='text' name='id_cari'> <input type='submit' value='Cari'>
      </form>

     <table class="table table-striped" border=1px>
       <tr align="center">
        <th>NIM</th> 
        <th>Nama</th> 
        <th>Tempat Lahir</th> 
        <th>Tanggal Lahir</th> 
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>IPK</th>
        <th>Aksi</th>
      </tr>
    <?php while ($data = mysqli_fetch_array($result)): ?>
      <tr>
    	  <td><?php echo $data["NIM"]; ?></td>
      	<td><?php echo $data["Nama"]; ?></td>
    	  <td><?php echo $data["Tempat_Lahir"]; ?></td>    	
        <td><?php echo $data["Tanggal_Lahir"]; ?></td>   
        <td><?php echo $data["Fakultas"]; ?></td>
        <td><?php echo $data["Jurusan"]; ?></td>
        <td><?php echo $data["IPK"]; ?></td>
        <td>
          <a href="update.php?NIM=<?php echo htmlspecialchars($data['NIM']); ?>" class="btn btn-warning" role="button">Edit</a>
          <a onclick="return confirm('Apakah anda yakin ingin menghapus data ?')" href="hapus.php?NIM=<?php echo htmlspecialchars($data['NIM']); ?>" class="btn btn-danger" role="button">Delete</a>
        </td>    
      </tr>	
    <?php endwhile; ?>
   </table>
   <a href="tambah.php" class="btn btn-primary" role="button">Tambah Data</a>
  </div>
  </body>
 </html>

<?php
  // Membebaskan sumber daya hasil query
  mysqli_free_result($result); 
  // Menutup koneksi dengan menggunakan fungsi umum
  db_disconnect($con);
?>