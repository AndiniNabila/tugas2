<h3>
    Tambah Data Pengguna
   
</h3>

<form action="<?php echo URL; ?>/users/store" method="POST">
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="user_email" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name="user_password">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="user_nama">
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="user_alamat">
  </div>
  <div class="mb-3">
    <label class="form-label">HP</label>
    <input type="text" class="form-control" name="user_pos">
  </div>
  <div class="mb-3">
    <label class="form-label">Pos</label>
    <input type="text" class="form-control" name="user_role">
  </div>
  <div class="mb-3">
    <label class="form-label">Role</label>
    <input type="text" class="form-control" name="gol_nama">
  </div>
  <div class="mb-3">
    <label class="form-label">Aktif</label>
    <input type="text" class="form-control" name="gol_nama">
  </div>
  <button type="submit" class="btn btn-success" name="btn_simpan">Simpan</button>
  <a href="<?php echo URL; ?>/users/index" class ="btn btn-primary">Kembali</a>
</form>