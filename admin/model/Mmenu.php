<?php
require_once 'Mindex.php';
class menu extends main
{
    public function menu_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM menu_tbl ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_menu_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM menu_tbl WHERE status=? AND chid=? ORDER BY sort ASC");
        $sql->bindValue(1,'1');
        $sql->bindValue(2,'0');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_submenu_list($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM menu_tbl WHERE status=? AND chid=? ORDER BY sort ASC");
        $sql->bindValue(1,'1');
        $sql->bindValue(2,$id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function sub_menu()
    {
        $sql = $this->pdo->prepare("SELECT * FROM menu_tbl WHERE chid=?");
        $sql->bindValue(1,'0');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function sub_menu_edit($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM menu_tbl WHERE chid=? AND id !=?");
        $sql->bindValue(1,'0');
        $sql->bindValue(2,$id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function menu_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO menu_tbl SET title=?, url=?, chid=?, status=?, sort=? ");
        $sql->bindValue(1, $data['title']);
        $sql->bindValue(2, $data['url']);
        $sql->bindValue(3, $data['chid']);
        $sql->bindValue(4, $data['rb']);
        $sql->bindValue(5, $data['sort']);
        $sql->execute();
    }

    public function menu_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM menu_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
    public function menu_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM menu_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function menu_edit($data, $id)
    {

        $sql = $this->pdo->prepare(" UPDATE menu_tbl SET title=?, url=?, sort=?, chid=?, status=?  WHERE id=? ");
        $sql->bindValue(1, $data['title']);
        $sql->bindValue(2, $data['url']);
        $sql->bindValue(3, $data['sort']);
        $sql->bindValue(4, $data['chid']);
        $sql->bindValue(5, $data['rb']);
        $sql->bindValue(6, $id);
        $sql->execute();
    }
}
