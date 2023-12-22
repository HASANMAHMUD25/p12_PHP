<?php
 class Produk{
    private $dbh;
    public function __construct($dbh){
        $this->dbh = $dbh;
    }
    public function getAllProduk(){
        $sql="SELECT * FROM Produk";
        $rs =$this->dbh->query($sql);
        return $rs;
    }
    public function getAllJenis(){
        $sql="SELECT * FROM jenis_";
        $rs =$this->dbh->query($sql);
        return $rs;
    }
 }
?>