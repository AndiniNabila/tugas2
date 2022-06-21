<h3>
    Tambah Data Golongan
   
</h3>

<form action="<?php echo URL; ?>/golongan/store" method="POST">
  <div class="mb-3">
    <label class="form-label">Kode</label>
    <input type="text" class="form-control" name="gol_kode" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name="gol_nama">
  </div>
  <button type="submit" class="btn btn-success" name="btn_simpan">Simpan</button>
  <a href="<?php echo URL; ?>/golongan/index" class ="btn btn-primary">Kembali</a>
</form>