<?php
require_once 'Mindex.php';
class user extends main
{
    
    public function user_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO user_tbl SET name=?, email=?, password=?, vc=?, status=?,verifyAdmin=? ");
        $sql->bindValue(1,$data['name']);
        $sql->bindValue(2,$data['email']);
        $sql->bindValue(3,$data['password']);
        $sql->bindValue(4,$data['vc']);
        $sql->bindValue(5,'0');
        $sql->bindValue(6,'0');
        $sql->execute();
        $id = $this->pdo->lastInsertId();
        return $id;
    }
    public function select_verifyuser($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM user_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_count_writer_list()
    {
        $sql = $this->pdo->prepare("SELECT COUNT(id) FROM user_tbl WHERE status=? AND verifyAdmin=? ");
        $sql->bindValue(1,'1');
        $sql->bindValue(2,'1');
        $sql->execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
    public function all_writer_list($level)
    {
        $sql = $this->pdo->prepare("SELECT * FROM user_tbl WHERE  level < ? ");
        $sql->bindValue(1,$level);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function select_user($email)
    {
        $sql = $this->pdo->prepare("SELECT * FROM user_tbl WHERE email=? ");
        $sql->bindValue(1,$email);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function person_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM user_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function person_edit($data, $id)
    {
        $sql = $this->pdo->prepare("UPDATE user_tbl SET name=?, email=?, phone=? WHERE id=? ");
        $sql->bindValue(1,$data['name']);
        $sql->bindValue(2,$data['email']);
        $sql->bindValue(3,$data['phone']);
        $sql->bindValue(4,$id);
        $sql->execute();
    }
    public function change_password($password, $id)
    {
        $sql = $this->pdo->prepare("UPDATE user_tbl SET password=? WHERE id=? ");
        $sql->bindValue(1,$password);
        $sql->bindValue(2,$id);
        $sql->execute();
     
    }
    public function writer_edit($data, $id)
    {
        $sql = $this->pdo->prepare("UPDATE user_tbl SET verifyAdmin=? WHERE id=? ");
        $sql->bindValue(1,$data['rb']);
        $sql->bindValue(2,$id);
        $sql->execute();
    }
    public function writer_level_edit($data, $id)
    {
        $sql = $this->pdo->prepare("UPDATE user_tbl SET level=? WHERE id=? ");
        $sql->bindValue(1,$data['rb']);
        $sql->bindValue(2,$id);
        $sql->execute();
    }
    public function writer_delete( $id)
    {
        $sql = $this->pdo->prepare("DELETE FROM user_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
}
