 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->
 
<?php
// deklarasi parameter koneksi database
$server   = "sql12.freemysqlhosting.net";
$username = "sql12724757";
$password = "gDvbA5RSPL";
$database = "sql12724757";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi MySQL Gagal : " .mysql_error());
mysql_select_db($database) or die ("Koneksi Database Gagal : " .mysql_error());
?>