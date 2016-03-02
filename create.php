<?php
/* Stworzenie tabeli do projektu o nazwie "kursy" */
require 'polaczenie.php';
$usun1 = "DROP TABLE kursy";
$create1 = "CREATE TABLE kursy (
  ID integer NOT NULL unique,
  DATA timestamp,
  MIASTO char(20),
  TEMAT char(80),
  PROWADZACY char(20),
  CENA float,
  ILOSCAKT INTEGER,
  ILOSCMAX INTEGER
  
);";
$usun2 = "DROP TABLE users";
$create2 = "CREATE TABLE users (
  ID integer NOT NULL unique,
  USERNAME varchar (15) NOT NULL ,
  PASSW varchar (25) NOT NULL 
  
);";
ibase_query($baza, $usun1);
ibase_query($baza, $create1);

ibase_query($baza, $usun2);
ibase_query($baza, $create2);


ibase_close($baza);
?>