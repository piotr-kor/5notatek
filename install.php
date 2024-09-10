<?php
include ("db-connect.php");

$sql = "CREATE TABLE notatki (
    id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
    note_name VARCHAR(255) NOT NULL,
    note_txt TEXT NOT NULL
)";

if ($polaczenie->query($sql) === TRUE) {
	echo "Table created successfully";
	}
else {
	echo "Error creating table: " . $polaczenie->error;
	}
$polaczenie->query("INSERT INTO notatki (note_name,note_txt) VALUES ('Notatka 1','Tresc notatki 1')");
$polaczenie->query("INSERT INTO notatki (note_name,note_txt) VALUES ('Notatka 2','Tresc notatki 2')");
$polaczenie->query("INSERT INTO notatki (note_name,note_txt) VALUES ('Notatka 3','Tresc notatki 3')");
$polaczenie->query("INSERT INTO notatki (note_name,note_txt) VALUES ('Notatka 4','Tresc notatki 4')");
$polaczenie->query("INSERT INTO notatki (note_name,note_txt) VALUES ('Notatka 5','Tresc notatki 5')");

$polaczenie->close();
?>