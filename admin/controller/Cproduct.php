<?php
require_once 'model/Mproduct.php';
$class=new product();
if($action=='list') {
    $products = $class->product_list();
    require_once 'view/product/list.php';
}
if($action=='add') {
    $pr = $class->subset_list();
    if(isset($_POST['btn'])) {
        $file=$_FILES['img1'];
        $format=explode('.',$file['name']);
        $name=rand().'.'.end($format);
        $from=$file['tmp_name'];
        $to[1]="../public/uploader/".$name;
        move_uploaded_file($from,$to[1]);

        $file=$_FILES['img2'];
        $format=explode('.',$file['name']);
        $name=rand().'.'.end($format);
        $from=$file['tmp_name'];
        $to[2]="../public/uploader/".$name;
        move_uploaded_file($from,$to[2]);

        $file=$_FILES['img3'];
        $format=explode('.',$file['name']);
        $name=rand().'.'.end($format);
        $from=$file['tmp_name'];
        $to[3]="../public/uploader/".$name;
        move_uploaded_file($from,$to[3]);
        $products= $class->add_product($_POST,$to);
        var_dump($products);
    header("location:index.php?c=product&a=add");
    }

    require_once 'view/product/add.php';
}
if($action=='delete') {
    $id=$_GET['id'];
$delete_pr=$class->delete_product($id);
header("location:index.php?c=product&a=list");
}
if($action=='edit') {
    $pr = $class->parent_list();
    $products = $class->product_list();
    $id = $_GET['id'];
    if (isset($_POST['btn'])) {
        $show_edit_pr = $class->edit_product($id, $_POST);
        header("location:index.php?c=product&a=list");
    }
    require_once 'view/product/edit.php';
}
