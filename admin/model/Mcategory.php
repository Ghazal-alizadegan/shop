<?php
$db=new PDO('mysql:local=localhost;dbname=shop;charset=utf8','root','');
$db->exec("set names utf8");
class category{
    public function __construct ()
    {
        global $db;
        $this->db=$db;
    }
    public function parent_category_list()
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE chid='0' ");

        return $sql;
    }
    public function add_parent_category($title)
    {
        $sql=$this->db->query("INSERT INTO  product_pr_tbl(title,chid) VALUES ('$title','0')");
    }
    public function add_parent_subset_category($title,$parent)
    {
        $sql=$this->db->query("INSERT INTO  product_pr_tbl(title,chid) VALUES ('$title','$parent')");
    }

    public function parent_list()
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE chid ='0'  ");
        return $sql;
    }
    public function parent_subset_list()
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE chid !='0'  ");

        return $sql;
    }
    public function show_parent_subset_list($chid)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id ='$chid'  ");
        $res=$sql->fetch();
        return $res;
    }
    public function delete_parent_category($id)
    {
        $sql=$this->db->query("DELETE FROM product_pr_tbl WHERE id ='$id'  ");
        $sql=$this->db->query("DELETE FROM product_pr_tbl WHERE chid ='$id'  ");
    }
    public function delete_parent_sb_category($id)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE chid !='0'  ");
        $sql=$this->db->query("DELETE FROM product_pr_tbl WHERE id ='$id'  ");
    }
    public function edit_parent_category($id,$title)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id ='0'  ");
        $sql=$this->db->query("UPDATE product_pr_tbl SET title='$title' WHERE id ='$id'  ");
    }
    public function show_edit_parent_category($id)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id ='$id'  ");
        $res=$sql->fetch();
        return $res['title'];
    }
    public function edit_parent_sb_category($id,$title)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id !='0'  ");
        $sql=$this->db->query("UPDATE product_pr_tbl SET title='$title' WHERE id ='$id'  ");
    }
    public function show_edit_parent_sb_category($id)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id ='$id' ");
       $res=$sql->fetch();
        return $res;
    }
    public function category_list()
    {
            $sql=$this->db->query ("SELECT * FROM product_pr_tbl WHERE chid='0'");
            $res=$sql->fetchAll();
            return $res;
    }
    public function category_sb_list($id)
    {
        $sql=$this->db->query ("SELECT * FROM product_pr_tbl WHERE chid=$id");
        $res=$sql->fetchAll();
        return $res;
    }
    public function category_sb()
    {
        $sql=$this->db->query ("SELECT * FROM product_pr_tbl WHERE chid!='0'");
        $res=$sql->fetchAll();
        return $res;
    }
}
