<?php
//Wywołanie: get.php?id=4&czy_nazwa=0
include ("db-connect.php");
$id = mysqli_real_escape_string($polaczenie, $_GET['id']);
$czy_nazwa = mysqli_real_escape_string($polaczenie, $_GET['czy_nazwa']);
if ($czy_nazwa) {$kolumna = "note_name";} else {$kolumna = "note_txt";}

$zapytanie = "SELECT $kolumna FROM notatki WHERE id='".$id."'";

if ($result = $polaczenie -> query($zapytanie)) {
    while ($wiersz = $result -> fetch_row()) {
        $txt = $wiersz[0];
        }
    $result -> free_result();
    }

    echo $txt;
 

mysqli_close($polaczenie);
?>
