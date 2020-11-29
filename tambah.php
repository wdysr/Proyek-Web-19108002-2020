<html> 
 <head>        
  <title>Tambah Data Mahasiswa</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 </head>
 <body>
    
  <div class="container">
      <h1>Tambah Data Mahasiswa</h1>
      <form action="ctrl_mahasiswa.php?act=tambah" method ="POST">

  <div class="form-group">
    <label>NIM :</label>
    <input type="text" name="txt_nim" class="form-control" placeholder="Tuliskan NIM" required />
  </div>

  <div class="form-group">
    <label>Nama Lengkap :</label>
            <input type="text" name="txt_nama" class="form-control" placeholder="Tuliskan Nama Lengkap" required/>
  </div>

  <div class="form-group">
    <label>Tempat Lahir :</label>
    <input type="text" name="txt_tempat" class="form-control" placeholder="Tuliskan Tempat Lahir" required/>
  </div>

  <div class="form-group">
    <label>Tanggal Lahir :</label>
    <input type="date" name="txt_tanggal" class="form-control" placeholder="Tuliskan Tanggal Lahir" required/>
  </div>

  <div class="form-group">
    <label>Fakultas :</label>
    <input type="text" name="txt_fakultas" class="form-control" placeholder="Tuliskan Fakultas" required/>
  </div>

  <div class="form-group">
    <label>Jurusan :</label>
    <input type="text" name="txt_jurusan" class="form-control" placeholder="Tuliskan Jurusan" required/>
  </div>

  <div class="form-group">
    <label>IPK :</label>
    <input type="text" name="txt_ipk" class="form-control" placeholder="Tuliskan IPK" required/>
  </div>

        <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </form>
  </div> 
 </body>
</html>