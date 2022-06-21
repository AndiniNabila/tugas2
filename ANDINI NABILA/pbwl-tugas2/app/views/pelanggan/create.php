<h3>
    Tambah Data Pelanggan
   
</h3>

<form action="<?php echo URL; ?>/pelanggan/store" method="POST">
  <div class="mb-3">
    <label class="form-label">Golongan</label>
    <input type="text" class="form-control" name="pel_id_gol" required>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Nomor</label>
    <input type="text" class="form-control" name="pel_no">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="pel_nama">
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="pel_alamat">
  </div>
  <div class="mb-3">
    <label class="form-label">HP</label>
    <input type="text" class="form-control" name="pel_hp">
  </div>
  <div class="mb-3">
    <label class="form-label">KTP</label>
    <input type="text" class="form-control" name="pel_ktp">
  </div>
  <div class="mb-3">
    <label class="form-label">Seri</label>
    <input type="text" class="form-control" name="pel_seri">
  </div>
  <div class="mb-3">
    <label class="form-label">Meteran</label>
    <input type="text" class="form-control" name="pel_meteran">
  </div>
  <div class="mb-3">
    <label class="form-label">Aktif</label>
    <input type="text" class="form-control" name="pel_aktif">
  </div>
  <div class="mb-3">
    <label class="form-label">User</label>
    <input type="text" class="form-control" name="pel_id_users">
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="btn_simpan">Simpan</button>
  <a href="<?php echo URL; ?>/pelanggan/index" class ="btn btn-primary">Kembali</a>
</form>