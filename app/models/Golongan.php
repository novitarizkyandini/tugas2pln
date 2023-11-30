<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_golongan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $kode = $_POST['kode'];
          $nama = $_POST['nama'];

          $sql = "INSERT INTO tb_golongan SET gol_kode=:gol_kode, gol_nama=:gol_nama";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_kode", $kode);
          $stmt->bindParam(":gol_nama", $nama);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":gol_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $kode = $_POST['kode'];
          $nama = $_POST['nama'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_golongan SET gol_kode=:gol_kode, gol_nama=:gol_nama WHERE gol_id=:gol_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_kode", $kode);
          $stmt->bindParam(":gol_nama", $nama);
          $stmt->bindParam(":gol_id", $id);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_id", $id);
          $stmt->execute();
     }
}