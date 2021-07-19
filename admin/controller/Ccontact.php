<?php
require_once 'model/Mcontact.php';
$class=new contact();
if($action=='list') {
    $listcontact=$class->message_list();
    require_once 'view/contact/list.php';
}
if($action=='delete') {
    $id=$_GET['id'];
$delete=$class->delete_message($id);
header("location:index.php?c=contact&a=list");
}
if($action=='detail') {
    $id=$_GET['id'];
    $detail=$class->message_detail($id);
    require_once 'view/contact/detail.php';
}

