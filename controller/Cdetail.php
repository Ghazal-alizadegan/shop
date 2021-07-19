<?php

include_once 'admin/model/Mproduct.php';
$class = new product();

if ($action == 'detail') {
    $id = $_GET['id'];
    $detail = $class->show_edit_product($id);
    $search = $class->search_product_subset($detail['parent']);
    $search_chid = $class->search_product_parent_byid($detail['parent']);
    $search_parent = $class->search_product_parent($search_chid);
    $comment = $class->search_product_comment($id);
    if (isset($_POST['btn'])) {
        $date = date("Y F D");
        $class->add_comment($_POST, $id, $date);
        header("location:index.php?c=detail&a=detail&id=$id ");
    }


    include_once 'view/product/product-details.php';
}
if ($action == 'list') {
    $id = $_GET['id'];
    $class1 = new category();
    $category = $class1->category_list();
    $subset = $class1->category_sb();
    $product = $class->show_product($id);
    $pr = $class->show_pr($id);
    $product1 = $class->show_product($id);
    foreach ($pr as $p) {
        $ch = $p['chid'];
    }
    if (isset($ch)) {
        $search_parent = $class->search_product_parent($ch);
    }
    if (!isset($ch)) {
        $search_chid = $class->search_product_parent_byid($id);
        $search_parent = $class->search_product_parent($search_chid);
    }
    require_once 'view/product/product-list.php';
}
if ($action == 'grid') {
    $id = $_GET['id'];
    $class1 = new category();
    $category = $class1->category_list();
    $subset = $class1->category_sb();
    $product = $class->show_product($id);
    $pr = $class->show_pr($id);
    $product1 = $class->show_product($id);
    foreach ($pr as $p) {
        $ch = $p['chid'];
    }
    if (isset($ch)) {
        $search_parent = $class->search_product_parent($ch);
    }
    if (!isset($ch)) {
        $search_chid = $class->search_product_parent_byid($id);
        $search_parent = $class->search_product_parent($search_chid);
    }
    require_once 'view/product/product-grid.php';
}
if ($action == 'search') {
    if ($_POST) {
        include_once 'admin/model/Mproduct.php';
        $product = $class->search_product($_POST['search']);
        require_once 'view/product/search-result.php';
    }
}