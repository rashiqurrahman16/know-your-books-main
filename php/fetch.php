<?php


$connect = new PDO("mysql:host=localhost;dbname=book", "root", "");

$output = '';

$query = '';

if (isset($_POST["query"])) {
    $search = str_replace(",", "|", $_POST["query"]);
    $query = "
 SELECT * FROM books 
 WHERE bookId REGEXP '" . $search . "' 
 OR name REGEXP '" . $search . "' 
 OR publishername REGEXP '" . $search . "' 
 OR isbn REGEXP '" . $search . "' 
 OR genre REGEXP '" . $search . "' 
 ";
} else {
    $query = "
 SELECT * FROM books ORDER BY name
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

echo json_encode($data);