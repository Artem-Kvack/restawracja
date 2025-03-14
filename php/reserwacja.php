<?php 
 $serwer="localhost";
 $username="root";
 $password="";
 $database="db";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = mysqli_connect("localhost", "root", "", "baza") 
        or die("Błąd połączenia: " . mysqli_connect_error());

    $date = $_POST['date'];
    $number = $_POST['number'];
    $tel = $_POST['tel'];

    $sql = "INSERT INTO rezerwacje (data, liczba_osob, telefon) VALUES ('$date', '$number', '$tel')";

    if (mysqli_query($connection, $sql)) {
        echo "Dodano rezerwację do bazy";
    } else {
        echo "Błąd: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}

?>