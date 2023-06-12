<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="paylas";

$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Eror 404".mysqli_connect_error());
}
else
{
    echo "Connect is succesful";
}

?>