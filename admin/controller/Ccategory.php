<?php
require_once 'model/Mcategory.php';
$class=new category();
if($action=='list') {
    $categorys_pr = $class->parent_category_list();
    $categorys_sb = $class->parent_subset_list();
    require_once 'view/category/list.php';
}
if($action=='add') {
    $parent = $class->parent_list();
    if(isset($_POST['btn'])) {
        $categorys = $class->add_parent_category($_POST['title']);
        header("location:index.php?c=category&a=add");
    }
    if(isset($_POST['btn1'])) {
        $categorys = $class->add_parent_subset_category($_POST['title_subset'], $_POST['parent_subset']);
    }
    require_once 'view/category/add.php';
}
if($action=='delete') {
    $id=$_GET['id'];
$delete_pr=$class->delete_parent_category($id);
$delete_sb=$class->delete_parent_sb_category($id);
header("location:index.php?c=category&a=list");
}
if($action=='edit') {
    $parent = $class->parent_list();
    $id=$_GET['id'];
    if(isset($_POST['btn'])) {
        $show_edit_pr = $class->edit_parent_category($id, $_POST['title']);
        header("location:index.php?c=category&a=list");
    }
    if(isset($_POST['btn1'])) {
        $show_edit_pr = $class->edit_parent_category($id, $_POST['title']);
        header("location:index.php?c=category&a=list");
    }
    if(isset($_POST['btn1'])) {
        $show_edit_pr = $class->edit_parent_sb_category($id, $_POST['title_subset']);
        header("location:index.php?c=category&a=list");
    }
    require_once 'view/category/edit.php';
}
