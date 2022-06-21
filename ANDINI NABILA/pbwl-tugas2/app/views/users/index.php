<h3>
    Daftar Pengguna
    <a href="<?php echo URL; ?>/users/create" class ="btn btn-primary btn-sm float-end">Pengguna Baru</a>
</h3>

<table class = "table table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>POS</th>
            <th>ROLE</th>
            <th>AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $row['users_id']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td><?php echo $row['user_password']; ?></td>
            <td><?php echo $row['user_nama']; ?></td>
            <td><?php echo $row['user_alamat']; ?></td>
            <td><?php echo $row['user_hp']; ?></td>
            <td><?php echo $row['user_pos']; ?></td>
            <td><?php echo $row['user_role']; ?></td>
            <td><?php echo $row['user_aktif']; ?></td>
            <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['users_id']; ?>" class ="btn btn-warning btn-sm">Edit</a></td>
            <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['users_id']; ?>" class ="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin menghapus data ini?');">Delete</a></td>
        </tr>
        <?php } ?>

    </tbody>
    
</table>