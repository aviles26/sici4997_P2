<?php
$dbHostname = 'localhost';
$dbDatabase = 'richard_aviles';
$dbUsername = 'richard.aviles';
$dbPassword = '0012';

$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);
function getResultFromSQL($sql, $values = []) {
    global $db;

    $stmt = $db->prepare($sql);
    $stmt->execute($values);

    return $stmt->fetchAll();
}

function insertToDatabase($sql, $values = []) {
  global $db;

  $stmt = $db->prepare($sql);
  $stmt->execute($values);

  return $stmt->errorInfo();
}

function deleteFromDatabase($sql, $values = []) {
  global $db;

  $stmt = $db->prepare($sql);
  $stmt->execute($values);

  return $stmt->errorInfo();
}
?>
