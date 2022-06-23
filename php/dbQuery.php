<?php
    include("./dbConnection.php");

    $stmt = "SELECT * FROM moviegenres";
    $query = $conn->query($stmt);
    $queryCount = $query->rowCount();
    $genresRow = ($genresRow = $query->fetchAll(PDO::FETCH_ASSOC));

    $stmt = "SELECT * FROM movies";
    $query = $conn->query($stmt);
    $queryCount = $query->rowCount();

    $moviesRow = ($moviesRow = $query->fetchAll(PDO::FETCH_ASSOC));
?>