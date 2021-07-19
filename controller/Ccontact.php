<?php
include_once 'admin/model/Mcontact.php';
if ($_POST){
    $class=new contact();
    $class->send_message($_POST);
}
include_once 'view/contact/contact.php';