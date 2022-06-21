<?php

namespace App\Models;

use App\Core\Model;

class Users extends Model
{
    public function all()
    {
        $sql = "SELECT * FROM tb_users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function store()
    {
        if (isset($_POST['btn_simpan'])){

            $email = $_POST['user_email'];
            $password = $_POST['user_password'];
            $nama = $_POST['user_nama'];
            $alamat = $_POST['user_alamat'];
            $hp = $_POST['user_hp'];
            $pos = $_POST['use_pos'];
            $role = $_POST['user_role'];
            $aktif = $_POST['user_aktif'];

            $sql = "INSERT INTO tb_users SET user_email=:user_email, user_password=:user_password, user_nama=:user_nama, user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, user_aktif=:user_aktif";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_email", $email); 
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_nama", $nama);
            $stmt->bindParam(":user_alamat", $alamat);
            $stmt->bindParam(":user_hp", $hp);
            $stmt->bindParam(":user_pos", $pos);
            $stmt->bindParam(":user_role", $role);
            $stmt->bindParam(":user_aktif", $aktif);
            $stmt->execute();
        }
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_users WHERE users_id=:users_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam("users_id", $id);
        $stmt->execute();
        
        $data = $stmt->fetch();

        return $data;
    }

    public function update()
    {
        if (isset($_POST['btn_update'])){

            $id = $_POST['users_id'];
            $email = $_POST['user_email'];
            $password = $_POST['user_password'];
            $nama = $_POST['user_nama'];
            $alamat = $_POST['user_alamat'];
            $hp = $_POST['user_hp'];
            $pos = $_POST['user_pos'];
            $role = $_POST['user_role'];
            $aktif = $_POST['user_aktif'];
            $updated_at = date ('Y-m-d H:i:s');

            $sql = "UPDATE tb_users SET user_email=:user_email, user_password=:user_password, user_nama=:user_nama, user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, user_aktif=:user_aktif, updated_at=:updated_at WHERE users_id=:users_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_email", $email); 
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_nama", $nama);
            $stmt->bindParam(":user_alamat", $alamat);
            $stmt->bindParam(":user_hp", $hp);
            $stmt->bindParam(":user_pos", $pos);
            $stmt->bindParam(":user_role", $role);
            $stmt->bindParam(":user_aktif", $aktif);
            $stmt->bindParam(":users_id", $id);
            $stmt->bindParam(":updated_at", $updated_at);
            $stmt->execute();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_users WHERE users_id=:users_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam("users_id", $id);
        $stmt->execute();
  
    }


}