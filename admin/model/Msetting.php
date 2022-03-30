<?php
require_once 'Mindex.php';
class setting extends main
{
      
    public function setting_show()
    {
        $sql = $this->pdo->prepare("SELECT * FROM setting_tbl ");
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function setting_edit($data)
    {

        $sql = $this->pdo->prepare(" UPDATE setting_tbl SET title_site=?, logo_site=?, link_instagram=?, link_telegram=?, address=?, link_znu=?, link_olom=?, link_library=?, link_nima=?, link_golestan=?, copyright=?, about_znu=?, email=? ");
        $sql->bindValue(1, $data['title_site']);
        $sql->bindValue(2, $data['image']);
        $sql->bindValue(3, $data['link_instagram']);
        $sql->bindValue(4, $data['link_telegram']);
        $sql->bindValue(5, $data['address']);
        $sql->bindValue(6, $data['link_znu']);
        $sql->bindValue(7, $data['link_olom']);
        $sql->bindValue(8, $data['link_library']);
        $sql->bindValue(9, $data['link_nima']);
        $sql->bindValue(10, $data['link_golestan']);
        $sql->bindValue(11, $data['copyright']);
        $sql->bindValue(12, $data['about_znu']);
        $sql->bindValue(13, $data['email']);
        $sql->execute();
    }
}
