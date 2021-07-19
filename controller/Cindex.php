<?php
include_once 'admin/model/Mproduct.php';
$class= new product();
$product=$class->show_product2();
include_once 'view/index.php';