<h3>
    Daftar Golongan
    <a href="<?php echo URL; ?>/golongan/create" class ="btn btn-primary btn-sm float-end">Golongan Baru</a>
</h3>

<table class = "table table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $row['gol_id']; ?></td>
            <td><?php echo $row['gol_kode']; ?></td>
            <td><?php echo $row['gol_nama']; ?></td>
            <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class ="btn btn-warning btn-sm">Edit</a></td>
            <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class ="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin menghapus data ini?');">Delete</a></td>
        </tr>
        <?php } ?>

    </tbody>
    
</table>