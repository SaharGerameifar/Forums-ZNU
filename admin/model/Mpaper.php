<?php
require_once 'Mindex.php';
class paper extends main
{
    public function paper_list() {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl WHERE status=?");
        $sql->bindValue(1,'1');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function my_paper_list($user_id) {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl WHERE userid=? ");
        $sql->bindValue(1,$user_id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_paper_list() {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl WHERE show_status=? ORDER BY date DESC");
        $sql->bindValue(1,'1');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_paper_list_search($search_content) {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl WHERE show_status=? AND title LIKE '%$search_content%' ORDER BY date DESC");
        $sql->bindValue(1,'1');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_limit_paper_list() {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl WHERE show_status=? ORDER BY date DESC LIMIT 6");
        $sql->bindValue(1,'1');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_count_paper_list() {
        $sql = $this->pdo->prepare("SELECT COUNT(id) FROM paper_tbl WHERE show_status=? ORDER BY date DESC LIMIT 6");
        $sql->bindValue(1,'1');
        $sql->execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
    public function paper_add($data) {
        $sql = $this->pdo->prepare(" INSERT INTO paper_tbl SET name=?, userid=?, title=?, body=?, status=?, image=?, tags=?, show_status=? ");
        $sql->bindValue(1,$data['name']);
        $sql->bindValue(2,$data['user_id']);
        $sql->bindValue(3,$data['title']);
        $sql->bindValue(4,$data['text']);
        $sql->bindValue(5,$data['rb']);
        $sql->bindValue(6,$data['image']);
        $sql->bindValue(7,$data['tags']);
        $sql->bindValue(8,'0');
        $sql->execute();
    }
    public function my_paper_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM paper_tbl WHERE id=? AND show_status !=?");
        $sql->bindValue(1,$id);
        $sql->bindValue(2,'1');
        $sql->execute();
    }
    public function paper_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM paper_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
    public function paper_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function my_paper_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl WHERE id=? ");
        $sql->bindValue(1,$id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function paper_edit($data,$id,$lock)
    {
        
        $sql = $this->pdo->prepare(" UPDATE paper_tbl SET  show_status=?, plock=?, date=?  WHERE id=? ");
        $sql->bindValue(1,$data['rb']);
        $sql->bindValue(2,$lock);
        $sql->bindValue(3,$data['date']);
        $sql->bindValue(4,$id);
        $sql->execute();
    }
    public function my_paper_edit($data,$id)
    {
        
        $sql = $this->pdo->prepare(" UPDATE paper_tbl SET title=?, body=?, status=?, image=?, show_status=?, tags=?  WHERE id=? ");
        $sql->bindValue(1,$data['title']);
        $sql->bindValue(2,$data['text']);
        $sql->bindValue(3,$data['rb']);
        $sql->bindValue(4,$data['image']);
        $sql->bindValue(5,'0');
        $sql->bindValue(6,$data['tags']);
        $sql->bindValue(7,$id);
        $sql->execute();
    }

public function paper_view($id , $view_paper)
{

    $sql = $this->pdo->prepare(" UPDATE paper_tbl SET view_paper=?  WHERE id=? ");
    $sql->bindValue(1,$view_paper);
    $sql->bindValue(2, $id);
    $sql->execute();
}
public function comment_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO paper_comment_tbl SET name=?, email=?, comment_date=?, body=?, paper_id=?, image=?, reply=?");
        $sql->bindValue(1, $data['name']);
        $sql->bindValue(2, $data['email']);
        $sql->bindValue(3, $data['comment_date']);
        $sql->bindValue(4, $data['body']);
        $sql->bindValue(5, $data['paper_id']);
        $sql->bindValue(6, $data['image']);
        $sql->bindValue(7, $data['reply']);
        $sql->execute();
    }
    public function comment_count($id)
    {
        $sql = $this->pdo->prepare("SELECT COUNT(id) FROM paper_comment_tbl WHERE show_status=?  AND paper_id=? ");
        $sql->bindValue(1, '1');
        $sql->bindValue(2, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_show_insite($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_comment_tbl WHERE show_status=? AND reply=? AND paper_id=? ORDER BY comment_date DESC ");
        $sql->bindValue(1, '1');
        $sql->bindValue(2, '0');
        $sql->bindValue(3, $id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 
    public function comment_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_comment_tbl WHERE reply=?");
        $sql->bindValue(1, '0');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 
    public function comment_list_paper($paper_id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_tbl LEFT JOIN paper_comment_tbl ON paper_tbl.id = paper_comment_tbl.paper_id WHERE paper_tbl.id=?");
        $sql->bindValue(1, $paper_id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    } 
    public function comment_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM paper_comment_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
    }
    public function comment_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_comment_tbl WHERE id=?");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_edit($data,$id)
    {
        
        $sql = $this->pdo->prepare(" UPDATE paper_comment_tbl SET  show_status=? WHERE id=? ");
        $sql->bindValue(1,$data['rb']);
        $sql->bindValue(2,$id);
        $sql->execute();
    }
    public function comment_reply($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_comment_tbl WHERE reply=?");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function reply_comment_show_insite($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM paper_comment_tbl WHERE reply=?  ORDER BY comment_date DESC ");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}