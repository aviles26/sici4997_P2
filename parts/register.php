<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';

?>

<div>
  <div class="row">
    <div class="col-sm-4">
      &nbsp;
    </div>
    <div class="col-sm-3">
      <div name="registerErrors">
        
      </div>
        <form method="post" action="index.php?a=doRegister">
          <div class="form-group">
            <h1><a style="color:white";>Lleno los campos:</a></h1>
            <label for="username"><a style="color:white";>Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" value="<?php echo $uname; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="">
          </div>
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" class="form-control" name="password1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="password2">Repeat Password</label>
            <input type="password" class="form-control" name="password2" placeholder="Repeat Password">
          </div>
          <button name="registerButton" type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <div class="col-sm-5">
      &nbsp;
    </div>
  </div>
</div>
