<?php
//include_once 'classes/user.php';

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

$insertQuery = insertToDatabase('INSERT INTO my_courses (id_user, id_course)', [$loggedUser->id, $id]);



?>
