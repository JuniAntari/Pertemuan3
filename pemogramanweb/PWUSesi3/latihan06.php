<?php

$mhs = array (
    array ("Ardika","22347215","Denpadar") ,
    array ("Wahyu Hidayat","22347067","Malang") ,
    array ("Santi Kirana","22347342","Surabaya") ,
    array ("Zizi","22347112","Flores") ,

);
header ('Content-Type: application/json; charset=utf-8') ;
echo json_encode ($mhs) ;
