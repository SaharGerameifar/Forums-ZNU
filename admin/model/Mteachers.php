<?php
require_once 'Mindex.php';
class teachers extends main
{
    public function teachers_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM teachers_tbl ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function teachers_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO teachers_tbl SET name=?, email=?, site=?, chid=?, image=? ");
        $sql->bindValue(1, $data['name']);
        $sql->bindValue(2, $data['email']);
        $sql->bindValue(3, $data['site']);
        $sql->bindValue(4, $data['chid']);
        $sql->bindValue(5, $data['image']);
        $sql->execute();
    }
    
    public function teachers_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM teachers_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
    public function teachers_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM teachers_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function teachers_edit($data, $id)
    {

        $sql = $this->pdo->prepare(" UPDATE teachers_tbl SET name=?, email=?, site=?, chid=?, image=? WHERE id=? ");
        $sql->bindValue(1, $data['name']);
        $sql->bindValue(2, $data['email']);
        $sql->bindValue(3, $data['site']);
        $sql->bindValue(4, $data['chid']);
        $sql->bindValue(5, $data['image']);
        $sql->bindValue(6, $id);
        $sql->execute();
    }
    public function section_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM section_tbl ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
