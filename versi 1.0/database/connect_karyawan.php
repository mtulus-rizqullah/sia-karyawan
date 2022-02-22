<?php
define("HOST", "localhost"); //Host database
define("USER", "root"); //Username database
define("PASSWORD", ""); //Password database
define("DATABASE", "db_sia"); //Nama database
//Melakukan koneksi ke database berdasarkan konfigurasi diatas
$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);


