<?php
require_once 'Mindex.php';
class section extends main
{
    public function section_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM section_tbl ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
   
    public function section_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO section_tbl SET title=?, body=? ");
        $sql->bindValue(1, $data['title']);
        $sql->bindValue(2, $data['body']);
        $sql->execute();
    }
    
    public function section_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM section_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
    public function section_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM section_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function section_edit($data, $id)
    {

        $sql = $this->pdo->prepare(" UPDATE section_tbl SET title=?, body=? WHERE id=? ");
        $sql->bindValue(1, $data['title']);
        $sql->bindValue(2, $data['body']);
        $sql->bindValue(3, $id);
        $sql->execute();
    }
}
