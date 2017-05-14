<?php require_once('session.php'); ?>
<?php require_once('db.php'); ?>
<?php
if (!empty($_POST['login'])) {
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];
  $login = login($pseudo, $password);

  if (empty($login)) {
    echo '<p>Login/mdp incorrects</p>';
  }
  else {
    $_SESSION['id'] = $login->id;
    $_SESSION['pseudo'] = $login->pseudo;
  }
}
?>
<!doctype html>
<html>
  <?php require_once('head.html'); ?>
  <body>
    <?php if (!empty($_SESSION['id'])): ?>
      <p>Bienvenue <?= $_SESSION['pseudo'] ?></p>
      <p><a href="logout">Logout</a></p>
    <?php else: ?>
      <p><a href="login">Login</a></p>
    <?php endif; ?>
    <div class="main">
      <header>
        <h1>Blog</h1>
      </header>
      <section>
        <?php $posts = get_articles(); ?>
        <?php foreach($posts as $post): ?>
        <article>
          <div class="left">
            <img src="<?= $post->image ?>" alt="Post image">
          </div>
          <div class="right">
            <h2><a href="article/<?= $post->id ?>"> <?= $post->title ?> </a></h2>
            <div class="date"><?= $post->date ?></div>
            <div class="content"><?= $post->content ?></div>
          </div>
        </article>
        <?php endforeach; ?>
      </section>
      <footer>
        <p>Version de PHP utilisée : <?php echo phpversion(); ?></p>
      </footer>
    </div>
  </body>
</html>
