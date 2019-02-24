<?php 
  $edit=$mysqli->query("select*from guru where id_guru='$_GET[id_guru]'");
  $e=mysqli_fetch_array($edit);
?>
<form name="form_guru" action="index.php?page=update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idguru" value="<?php echo $e['id_guru']?>">

  <div class="form-group">
    <label for="username">Username</label>
    <input type="hidden" name="id" value="<?php echo $e['username'];?>">
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required value="<?php echo $e['username'];?>">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required value="<?php echo base64_decode($e['password']);?>">
  </div>
  <div class="form-group">
    <label for="kode_guru">Kode Guru</label>
    <input type="hidden" name="kode_guru" value="<?php echo $e['kode_guru'];?>">
    <input type="text" class="form-control" id="kode_guru" placeholder="Kode Guru" name="kode_guru" required value="<?php echo $e['kode_guru'];?>">
  </div>
  <div class="form-group">
    <label for="nip">nip</label>
    <input type="hidden" name="id" value="<?php echo $e['nip'];?>">
    <input type="text" class="form-control" id="nip" placeholder="nip" name="nip" required value="<?php echo $e['nip'];?>">
  </div>
  <div class="form-group">
    <label for="nama_guru">Nama Guru</label>
    <input type="hidden" name="id" value="<?php echo $e['id_guru'];?>">
    <input type="text" class="form-control" id="nama_guru" placeholder="Nama Guru" name="nama_guru" required value="<?php echo $e['nama_guru'];?>">
  </div>
<div class="form-group">
    <label for="Jk">Jenis Kelamin</label>
    <select name="jk" class="form-control" id="jk" name="jk" required>
    	<option value="<?php echo $e['jk'];?>"><?php echo $e['jk'];?></option>
    	<option value="Laki-Laki">Laki-Laki</option>
    	<option value="Permpuan">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="hidden" name="alamat" value="<?php echo $e['alamat'];?>">
    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required value="<?php echo $e['alamat'];?>">
  </div>
  
<div class="form-group">
    <label for="agama">agama</label>
    <select name="agama" class="form-control" id="agama" name="agama" required>
    	<option value="<?php echo $e['agama'];?>"><?php echo $e['agama'];?></option>
    	<option value="">None</option>
    	<option value="Islam">Islam</option>
    	<option value="Kristen">Kristen</option>
		<option value="Hindu">Budha</option>
		<option value="Katolik">Katolik</option>
		<option value="Kong Hu Cu">Kong Hu Cu</option>
		<option value="Lainnya">Lainnya</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tlp">Tlp</label>
    <input type="hidden" name="tlp" value="<?php echo $e['id_guru'];?>">
    <input type="text" class="form-control" id="tlp" placeholder="Tlp" name="tlp" required value="<?php echo $e['tlp'];?>">
  </div>
  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar">
    <span><?php echo $e['gambar'];?></span>
  </div>
  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  </form>