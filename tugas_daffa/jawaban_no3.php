<?php
 class minimarket{
    public $penjual = "daffa";
    public $barang= "susu";
    public $pembeli= "mujib";

    public function __construct(){
        echo "ini berasal dari construct minimarket";
    }
    public function pembayaran(){
        echo "pembayaram $this->pembeli dengan harga $this->barang kasir $this->penjual";
    }
    public function __destruct(){
        echo "ini berasal dari destruct minimarket" ;
    }
   
 }
    $minimarket_daffa = new minimarket();
    echo "<br/>";
    echo $minimarket_daffa ->pembayaran();
    echo "<br/>";
    ?>