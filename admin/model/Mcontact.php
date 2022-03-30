<?php
require_once 'Mindex.php';
class contact extends main
{
    public function contact_list() {
        $sql = $this->pdo->prepare("SELECT * FROM contact_tbl ");
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
  
    public function contact_add($data) {
        $sql = $this->pdo->prepare(" INSERT INTO contact_tbl SET name=?, email=?, title=?, body=?");
        $sql->bindValue(1,$data['name']);
        $sql->bindValue(2,$data['email']);
        $sql->bindValue(3,$data['title']);
        $sql->bindValue(4,$data['body']);
        $sql->execute();
        
    }
   
    public function contact_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM contact_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
    public function contact_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM contact_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
}
