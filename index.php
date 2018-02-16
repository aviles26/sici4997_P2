<?php

$maxSessionTime = 60 * 30; // 30 minutes

session_start();
date_default_timezone_set('EST');

$action = (isset($_GET['a'])) ? $_GET['a'] : '';
include 'db.php';
include './classes/user.php';

if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);

    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            showError('Unauthorized access! Session destroyed!');
        }
    }
}

include './parts/header.php';

if ($action == 'login') {
    include './parts/login.php';
} else if ($action == 'logout') {
    session_destroy();
    header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);

    if (is_null($u)) {
        showError('The user doesn\'t exist.');
        include './parts/login.php';
    } else if ($u->validatePassword($_POST['password'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
        $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
        header('Location: index.php');
    } else {
        showError('The entered password is incorrect!');
        include './parts/login.php';
    }
    
} else if ($action == 'register') {
    include './parts/register.php';
} else if ($action == 'doRegister') {
    $u = User::loadFromUsername($_POST['username']);

    if ($u) {
        showError('The username already exist.');
        include './parts/register.php';
    } else {
        $u = new User();

        $u->username = $_POST['username'];
        $u->password = $_POST['password1'];
        $u->email = $_POST['email'];
        $u->save();

        showSuccess('Bienvenido!');
    }

} else if ($action == 'courses') {
  
   //Reanudamos la sesión 
  //session_start(); 
  //Validamos si existe realmente una sesión activa o no 
  if($_SESSION["id_user"] =! "$loggedUser->id")
  { 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: index.php?a=login");
  }

  $do = (isset($_GET['do'])) ? $_GET['do'] : '';
  
  if($do == 'remover') {
    $courseId = (isset($_GET['courseId'])) ? $_GET['courseId'] : '';
    $deleteQuery = deleteFromDatabase('DELETE FROM my_courses WHERE id_user = ? AND id_course = ?', [$loggedUser->id, $courseId]);
    showSuccess('Su curso ha sido removido.');
  }
  include 'mycourses.php';     

} else if ($action == 'messages') {
    include 'messages.php';
    
  //Reanudamos la sesión 
  //session_start(); 
  //Validamos si existe realmente una sesión activa o no 
  if($_SESSION["id_user"] =! "$loggedUser->id")
  { 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: index.php?a=login");
  }

} else if ($action == 'notifications') {
    include 'notifications.php';
    
  //Reanudamos la sesión 
  //session_start(); 
  //Validamos si existe realmente una sesión activa o no 
  if($_SESSION["id_user"] =! "$loggedUser->id")
  { 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: index.php?a=login");
  }

} else if ($action == 'takecourses') {
    include 'takecourses.php';
    
  //Reanudamos la sesión 
  //session_start(); 
  //Validamos si existe realmente una sesión activa o no 
  if($_SESSION["id_user"] =! "$loggedUser->id")
  { 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: index.php?a=login");
  }

    $do = (isset($_GET['do'])) ? $_GET['do'] : '';

    if($do == 'agregar') {
      //include_once './parts/agregar.php';
      $courseId = (isset($_GET['courseId'])) ? $_GET['courseId'] : '';
      $insertQuery = insertToDatabase('INSERT INTO my_courses (id_user, id_course) VALUES (?, ?)', [$loggedUser->id, $courseId]);
      showSuccess('Su curso ha sido añadido.');
    }
  } else {
    include './parts/body.php';
}

include './parts/footer.php';

//echo '<pre>' . print_r($_SESSION, true)  . '</pre>';
if (isset($_SESSION['loginTime'])) {
    echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}

function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}

function showSuccess($msg) {
    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
}

?>
