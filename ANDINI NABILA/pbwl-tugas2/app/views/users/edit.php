<h3>
    Edit Data Pengguna
   
</h3>

<form action="<?php echo URL; ?>/users/update" method="POST">
    <input type="hidden" name="users_id" value="<?php echo $data['row']['users_id']; ?>">
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name="user_password" value="<?php echo $data['row']['user_password']; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="user_nama" value="<?php echo $data['row']['user_nama']; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">alamat</label>
    <input type="text" class="form-control" name="user_alamat" value="<?php echo $data['row']['user_alamat']; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">HP</label>
    <input type="text" class="form-control" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">POS</label>
    <input type="text" class="form-control" name="user_pos" value="<?php echo $data['row']['user_pos']; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Role</label>
    <input type="text" class="form-control" name="user_role" value="<?php echo $data['row']['user_role']; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Aktif</label>
    <input type="text" class="form-control" name="user_aktif" value="<?php echo $data['row']['user_aktif']; ?>">
  </div>
  <button type="submit" class="btn btn-success" name="btn_update">Update</button>
  <a href="<?php echo URL; ?>/users/index" class ="btn btn-primary">Kembali</a>
</form>