<?php
  require_once "koneksi.php";
  $txt_nim=$_GET['NIM'];
  $sql = "SELECT * FROM DAFTAR_MAHASISWA WHERE NIM = '$txt_nim'";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_array($result);
?> 
<html>  
  <head>        
   <title>Update Data Mahasiswa</title>
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  </head>

  <body>
      <div class="container">
          <h1>Update Data Mahasiswa</h1>
          <form action="ctrl_mahasiswa.php?act=update" method ="POST"> 

      <div class="form-group">
        <label> NIM : </label>
        <input type="text" class="form-control" value="<?php echo $data['NIM']; ?>" disabled>
      </div>

      <div class="form-group">
        <label> Nama : </label>
        <input type="text" name="Nama" class="form-control" value="<?php echo $data['Nama']; ?> ">
      </div>

      <div class="form-group"> 
              <label> Tempat Lahir : </label> 
              <input type="text" name="Tempat_Lahir" class="form-control" value="<?php echo $data['Tempat_Lahir']; ?> ">
            </div>

            <div class="form-group">
               <label> Tanggal Lahir : </label> 
               <input type="text" name="Tanggal_Lahir" class="form-control" value="<?php echo $data['Tanggal_Lahir']; ?> ">
            </div>

            <div class="form-group">
               <label> Fakultas : </label>
               <input type="text" name="Fakultas" class="form-control" value="<?php echo $data['Fakultas']; ?> ">
            </div>

            <div class="form-group">
               <label> Jurusan : </label> 
               <input type="text" name="Jurusan" class="form-control" value="<?php echo $data['Jurusan']; ?> ">
            </div>

            <div class="form-group"> 
               <label> IPK : </label> 
               <input type="text" name="IPK" class="form-control" value="<?php echo $data['IPK']; ?> ">
            </div>

            <input type="hidden" name="NIM" class="form-control" value="<?php echo $data['NIM']; ?>">

            <a href="index.php" class="btn btn-success" role="button">Back</a>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div> 
 </body>
</html>