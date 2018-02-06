<?php
//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';
?>
<div>
  <div class="row">
    <div class="col-sm-4">
      &nbsp;
    </div>
    <div class="col-sm-4">
        <form method="post" action="index.php?a=doLogin">
          <div class="form-group">

    <h1> <p style="color:white";>Login Upr</p></h1>
    <form method="post">
        <label for="username"><a style="color:white";>Username</a></label>
    	<input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" value="<?php echo $uname; ?>">
      <input type="hidden" name="action" value="login">
          </div>
          <div class="form-group">
            <label for="password"><a style="color:white";>Password</label>
         <input type="password" class="form-control" name="password" placeholder="Password">
         </div>
        <button type="submit" class="btn btn-outline-info my-2 my-sm-0">Login</button>       
    </form>
</div>
     <div class="col-sm-4">
      &nbsp;
      </div>
  </div>
</div>
     