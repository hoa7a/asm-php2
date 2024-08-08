<?php
// require_once 'app/models/BaseModel.php';
namespace App\Models;

class Student extends BaseModel{
    protected $table = 'sinh_vien';
     public function getListStudent() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function inserDataStudent($id, $name, $year_of_birth,$phone_number){
        $sql ="INSERT INTO `sinh_vien` VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $year_of_birth,$phone_number]);
    }

    public function idStudent($id){
        $sql = "SELECT * FROM sinh_vien where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateStudent($id, $name, $year_of_birth,$phone_number){
        $sql = "UPDATE SET `name` = ?, `year_of_birth`= ?, `phone_number`=? WHERE `id`= ? ";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $year_of_birth,$phone_number]);
    }

    public function deleteStudent($id){
        $sql = "DELETE FROM sinh_vien WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}

?>