<?php
//CONNEXION E LA BASE
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");
$message = mysqli_real_escape_string($conn, $_POST['text']);

$data="SELECT * FROM reponses INNER JOIN questions WHERE reponses.chatbox = questions.users LIKE "

?>