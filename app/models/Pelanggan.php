<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{
     public function show()
     {
          $query = "SELECT tb_pelanggan.*, tb_golongan.*, tb_users.* 
          FROM tb_pelanggan
          JOIN tb_golongan ON tb_pelanggan.pel_id_gol = tb_golongan.gol_id
          JOIN tb_users ON tb_pelanggan.pel_id_user = tb_users.user_id";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $id_gol = $_POST['id_gol'];
          $no = $_POST['no'];
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $hp = $_POST['hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $seri = $_POST['seri'];
          $meteran = $_POST['meteran'];
          $aktif = $_POST['aktif'];
          $id_user = $_POST['id_user'];

          $sql = "INSERT INTO tb_pelanggan SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_HP=:pel_HP, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id_gol", $id_gol);
          $stmt->bindParam(":pel_no", $no);
          $stmt->bindParam(":pel_nama", $nama);
          $stmt->bindParam(":pel_alamat", $alamat);
          $stmt->bindParam(":pel_hp", $hp);
          $stmt->bindParam(":pel_ktp", $pel_ktp);
          $stmt->bindParam(":pel_seri", $seri);
          $stmt->bindParam(":pel_meteran", $meteran);
          $stmt->bindParam(":pel_aktif", $aktif);
          $stmt->bindParam(":pel_id_user", $id_user);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $id_gol = $_POST['id_gol'];
          $no = $_POST['no'];
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $hp = $_POST['hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $seri = $_POST['seri'];
          $meteran = $_POST['meteran'];
          $aktif = $_POST['aktif'];
          $id_user = $_POST['id_user'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_pelanggan SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_HP=:pel_HP, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user WHERE pel_id=:pel_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id_gol", $id_gol);
          $stmt->bindParam(":pel_no", $no);
          $stmt->bindParam(":pel_nama", $nama);
          $stmt->bindParam(":pel_alamat", $alamat);
          $stmt->bindParam(":pel_HP", $hp);
          $stmt->bindParam(":pel_ktp", $pel_ktp);
          $stmt->bindParam(":pel_seri", $seri);
          $stmt->bindParam(":pel_meteran", $meteran);
          $stmt->bindParam(":pel_aktif", $aktif);
          $stmt->bindParam(":pel_id_user", $id_user);
          $stmt->bindParam(":pel_id", $id);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();
     }
}