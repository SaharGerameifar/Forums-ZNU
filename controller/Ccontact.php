<?php
require_once 'admin/model/Mcontact.php';
$contact = new contact();

switch ($action) {
   
    case 'add':
        if (isset($_POST['btn'])) {
          $data = $_POST['frm'];
          $contact->contact_add($data);
          header("location:index.php?c=contact&a=contact&error=no");
        }
         break;
    
 }
 
 
 
require_once "view/$controller/$action.php";
?>