<?php require_once('tpl/header.php'); ?>
  <div class="container">
    <div class="login">
      <h1>Login</h1>
      <form class="" action="<?= base_url('user/check_login') ?>" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo" value="">
        <input type="password" name="password" placeholder="Password" value="">
        <input type="submit" name="login" value="Login">
      </form>
    </div>
  </div>
<?php require_once('tpl/footer.php'); ?>
