<?php
require_once 'model/Mcontact.php';
$contact = new contact();
switch ($action) {
    case 'list':
        $contact = $contact->contact_list();
        break;
    case 'show':
        $id = $_GET['id'];
        $contact = $contact->contact_show($id);
        break;

    case 'delete':
        $id = $_GET['id'];
        $contact->contact_delete($id);
        header("location:index.php?c=contact&a=list");
        break;
    
}


require_once "view/$controller/$action.php";
