<?php
require_once 'Mindex.php';
class about extends main
{
    public function about_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM about_tbl ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function about_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO about_tbl SET name=?, user_role=?,image=?");
        $sql->bindValue(1, $data['name']);
        $sql->bindValue(2, $data['user_role']);
        $sql->bindValue(3, $data['image']);
        $sql->execute();
    }
    
    public function about_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM about_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
    public function about_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM about_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function about_edit($data, $id)
    {

        $sql = $this->pdo->prepare(" UPDATE about_tbl SET name=?, user_role=? ,image=?  WHERE id=? ");
        $sql->bindValue(1, $data['name']);
        $sql->bindValue(2, $data['user_role']);
        $sql->bindValue(3, $data['image']);
        $sql->bindValue(4, $id);
        $sql->execute();
    }
}
