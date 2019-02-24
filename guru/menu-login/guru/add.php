<form name="form_gur" action="index.php?page=create" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
  </div>
  <div class="form-group">
    <label for="kode_guru">kode_guru</label>
    <input type="text" class="form-control" id="kode_guru" placeholder="kode_guru" name="kode_guru" required>
  </div>
  <div class="form-group">
    <label for="nip">nip</label>
    <input type="text" class="form-control" id="nip" placeholder="nip" name="nip" required>
  </div>
  <div class="form-group">
    <label for="nama_guru">nama_guru</label>
    <input type="text" class="form-control" id="nama_guru" placeholder="nama_guru" name="nama_guru" required>
  </div>
<div class="form-group">
    <label for="Jk">Jk</label>
    <select name="jk" class="form-control" id="jk" name="jk" required>
    	<option value="">None</option>
    	<option value="Laki-Laki">Laki-Laki</option>
    	<option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" required>
  </div>
 <div class="form-group">
    <label for="Agama">Agama</label>
    <select name="agama" class="form-control" id="agama" name="agama" required>
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
    <label for="tlp">tlp</label>
    <input type="text" class="form-control" id="tlp" placeholder="tlp" name="tlp" required>
  </div>
  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" required>
  </div>
  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
  </form>