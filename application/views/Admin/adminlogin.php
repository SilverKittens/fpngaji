<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin | Login</title>
    <link href="<?php echo base_url()?>/asset/css/admin/global.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<div class="container login">
    <form action="<?php echo base_url()?>loginadmin" method="post" accept-charset="utf-8" class="form-signin">
      <h2 class="form-signin-heading">Login Admin</h2>
      <input type="text" name="adm_username" value="" placeholder="Username" />
      <input type="password" name="adm_password" value="" placeholder="Password" />
      <br />
      <br /><br />
      <input type="submit" name="submit" value="Login" class="btn btn-large btn-primary" /></form>
</div>
  </body>
</html>
