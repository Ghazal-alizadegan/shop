<?php
$db = new PDO('mysql:local=localhost;dbname=shop;charset=utf8', 'root', '');
$db->exec("set names utf8");
class contact {
    public function __construct ()
    {
        global $db;
        $this->db=$db;
    }

    public function send_message($value)
    {
   $this->db->query("INSERT INTO message_tbl(name,email,message_text) VALUES ('$value[name]','$value[email]','$value[message_text]')");

    }
    public function message_list()
    {
        $sql=$this->db->query("SELECT * FROM message_tbl ");
        $res=$sql->fetchAll();
        return $res;
    }
    public function delete_message($id)
    {
        $sql=$this->db->query("DELETE FROM message_tbl WHERE id='$id' ");

    }
    public function message_detail($id)
    {
        $sql=$this->db->query("SELECT * FROM message_tbl WHERE id='$id' ");
        $res=$sql->fetch();
        return $res;
    }
}
