<?php
require_once 'Mindex.php';
class course extends main
{

    public function comment_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO course_comment_tbl SET name=?, email=?, comment_date=?, body=?, course_id=?, image=?, reply=?");
        $sql->bindValue(1, $data['name']);
        $sql->bindValue(2, $data['email']);
        $sql->bindValue(3, $data['comment_date']);
        $sql->bindValue(4, $data['body']);
        $sql->bindValue(5, $data['course_id']);
        $sql->bindValue(6, $data['image']);
        $sql->bindValue(7, $data['reply']);
        $sql->execute();
    }
    public function comment_show_insite($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_comment_tbl WHERE show_status=? AND reply=? AND course_id=? ORDER BY comment_date DESC ");
        $sql->bindValue(1, '1');
        $sql->bindValue(2, '0');
        $sql->bindValue(3, $id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_count($id)
    {
        $sql = $this->pdo->prepare("SELECT COUNT(id) FROM course_comment_tbl WHERE show_status=?  AND course_id=? ");
        $sql->bindValue(1, '1');
        $sql->bindValue(2, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function reply_comment_show_insite($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_comment_tbl WHERE reply=?  ORDER BY comment_date DESC ");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_comment_tbl WHERE id=?");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM course_comment_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
    }
    public function comment_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_comment_tbl WHERE reply=?");
        $sql->bindValue(1, '0');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_reply($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_comment_tbl WHERE reply=?");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_list_course($course_id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_tbl LEFT JOIN course_comment_tbl ON course_tbl.id = course_comment_tbl.course_id WHERE course_tbl.id=?");
        $sql->bindValue(1, $course_id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function comment_edit($data,$id)
    {
        
        $sql = $this->pdo->prepare(" UPDATE course_comment_tbl SET  show_status=? WHERE id=? ");
        $sql->bindValue(1,$data['rb']);
        $sql->bindValue(2,$id);
        $sql->execute();
    }
    public function course_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_tbl ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_course_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_tbl WHERE show_status=? ORDER BY date DESC ");
        $sql->bindValue(1, '1');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_count_course_list()
    {
        $sql = $this->pdo->prepare("SELECT COUNT(id) FROM course_tbl WHERE show_status=? ORDER BY date DESC ");
        $sql->bindValue(1, '1');
        $sql->execute();
        $results = $sql->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public function enable_limit_course_list()
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_tbl WHERE show_status=? ORDER BY date DESC LIMIT 6");
        $sql->bindValue(1, '1');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function enable_course_list_search($search_content)
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_tbl WHERE show_status=? AND title LIKE '%$search_content%' ORDER BY date DESC ");
        $sql->bindValue(1, '1');

        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function course_add($data)
    {
        $sql = $this->pdo->prepare(" INSERT INTO course_tbl SET teacher=?, date=?, title=?, body=?, image=?, show_status=?, tags=?, price=? ");
        $sql->bindValue(1, $data['teacher']);
        $sql->bindValue(2, $data['date']);
        $sql->bindValue(3, $data['title']);
        $sql->bindValue(4, $data['text']);
        $sql->bindValue(5, $data['image']);
        $sql->bindValue(6, $data['rb']);
        $sql->bindValue(7, $data['tags']);
        $sql->bindValue(8, $data['price']);
        $sql->execute();
    }

    public function course_delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM course_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
    }
    public function course_show($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM course_tbl WHERE id=? ");
        $sql->bindValue(1, $id);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function course_edit($data, $id)
    {

        $sql = $this->pdo->prepare(" UPDATE course_tbl SET title=?, body=?, date=?, teacher=?, image=?, show_status=?, tags=?, price=?  WHERE id=? ");
        $sql->bindValue(1, $data['title']);
        $sql->bindValue(2, $data['text']);
        $sql->bindValue(3, $data['date']);
        $sql->bindValue(4, $data['teacher']);
        $sql->bindValue(5, $data['image']);
        $sql->bindValue(6, $data['rb']);
        $sql->bindValue(7, $data['tags']);
        $sql->bindValue(8, $data['price']);
        $sql->bindValue(9, $id);
        $sql->execute();
    }
    public function course_view($id, $view_course)
    {

        $sql = $this->pdo->prepare(" UPDATE course_tbl SET view_course=?  WHERE id=? ");
        $sql->bindValue(1, $view_course);
        $sql->bindValue(2, $id);
        $sql->execute();
    }
}
