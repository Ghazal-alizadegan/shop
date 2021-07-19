<?php
$db=new PDO('mysql:local=localhost;dbname=shop;charset=utf8','root','');

$db->exec("set names utf8");
class product{
    public function __construct ()
    {
        global $db;
        $this->db=$db;
        mysqli_connect_error();
    }
    public function product_list()
    {
            $sql=$this->db->query("SELECT * FROM product_tbl");
            return $sql;
    }
    public function add_product($data,$to)
    {
        $sql=$this->db->query("INSERT INTO  product_tbl(title,detail,status,parent,img1,img2,img3,price,number) VALUES ('$data[title]','$data[detail]','$data[status]','$data[parent]','$to[1]','$to[2]','$to[3]','$data[price]','$data[number]')");

    }
    public function parent_list()
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl  ");
        return $sql;
    }
    public function subset_list()
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE chid!='0'");

        return $sql;
    }

    public function show_parent_list($chid)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id ='$chid'  ");
        $res=$sql->fetch();
        return $res;
    }
    public function delete_product($id)
    {
        $sql=$this->db->query("DELETE FROM product_tbl WHERE id ='$id'  ");
    }
    public function edit_product($id,$data)
    {
        $sql=$this->db->query("UPDATE product_tbl SET title='$data[title]',parent='$data[parent]',status='$data[status]',detail='$data[detail]',price='$data[price]',number='$data[number]' WHERE id ='$id'  ");
    }
    public function show_edit_product($id)
    {
        $sql=$this->db->query("SELECT * FROM product_tbl WHERE id ='$id'  ");
        $res=$sql->fetch();
        return $res;
    }
    public function category_list()
    {
        try {
            $sql=$this->db->query("SELECT * FROM product_pr_tbl");
            $res=$sql->fetchAll();
            return $res;
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
    public function search_product_subset($parent)
    {
        $sql=$this->db->query("SELECT * FROM product_tbl WHERE parent ='$parent'");
        $res=$sql->fetchAll();
        return $res;
    }
    public function search_product_parent_byid($parent)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id ='$parent'");
        $res=$sql->fetch();
        return $res['chid'];
    }
    public function search_product_parent($chid)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE id ='$chid'");
        $res=$sql->fetch();
        return $res['title'];
    }
    public function add_comment($data,$id,$date)
    {
        $sql=$this->db->query("INSERT INTO  comment_tbl(name,email,text,product_id,date) VALUES ('$data[name]','$data[email]','$data[text]','$id','$date')");
    }
    public function search_product_comment($id)
    {
        $sql=$this->db->query("SELECT * FROM comment_tbl WHERE product_id ='$id'");
//        $sql=$this->db->query("SELECT * FROM product_tbl WHERE title !='$title'");
        $res=$sql->fetchAll();
        return $res;
    }
    public function show_product($id)
    {
        $sql=$this->db->query("SELECT * FROM product_tbl WHERE parent='$id'");
        $res=$sql->fetchAll();
        return $res;
    }
    public function show_pr($id)
    {
        $sql=$this->db->query("SELECT * FROM product_pr_tbl WHERE chid='$id'");
        $res=$sql->fetchAll();
        return $res;
    }
    public function show_product2()
    {
        $sql=$this->db->query("SELECT * FROM product_tbl WHERE price >= 80000 LIMIT 4");
        $res=$sql->fetchAll();
        return $res;
    }
    public function search_product($title)
    {
        $sql=$this->db->query("SELECT * FROM product_tbl WHERE title LIKE '%$title%'");
        $res=$sql->fetchAll();
        return $res;
    }

}
