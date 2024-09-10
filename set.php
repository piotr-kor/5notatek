<?php
//Wywołanie: set.php?id=4&czy_nazwa=1&txt=Notka4
include ("db-connect.php");
$id = mysqli_real_escape_string($polaczenie, $_GET['id']);
$czy_nazwa = mysqli_real_escape_string($polaczenie, $_GET['czy_nazwa']);
if ($czy_nazwa) {$kolumna = "note_name";} else {$kolumna = "note_txt";}
$txt = mysqli_real_escape_string($polaczenie, $_GET['txt']);

$zapytanie = "UPDATE notatki SET $kolumna = '$txt' WHERE id='".$id."'";
//echo $zapytanie;

if ($polaczenie->query($zapytanie) === TRUE) {
    echo "Zapisano";
  } else {
    echo "Error updating record: " . $polaszenie->error;
  }
 

mysqli_close($polaczenie);
?>
