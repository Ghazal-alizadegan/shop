<?php
$db=new PDO('mysql:local=localhost;dbname=shop;charset=utf8','root','');
$db->exec("set names utf8");
class login{
    public function __construct()
    {
        global $db;

        $this->db=$db;
    }
    public function user_login($data){
        $results=$this->db->query("SELECT * FROM user_tbl WHERE username='$data[username]'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

}
