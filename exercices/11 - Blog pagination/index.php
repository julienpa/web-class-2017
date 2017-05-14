<?php require_once('session.php'); ?>
<?php require_once('db.php'); ?>
<?php
$nb_articles = 5;
$total_articles =  intval(get_nb_articles());
$nb_pages = ceil($total_articles/$nb_articles);

$page = empty($_GET['p']) ? 1 : intval($_GET['p']);

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
    <div class="login-header">
      <?php if (!empty($_SESSION['id'])): ?>
        <p>Bienvenue <?= $_SESSION['pseudo'] ?></p>
        <p><a href="logout">Logout</a></p>
      <?php else: ?>
        <p><a href="login">Login</a></p>
      <?php endif; ?>
    </div>
    <div class="main">
      <header>
        <h1>Blog</h1>
      </header>
      <section>
        <?php $posts = get_articles($nb_articles, $page); ?>
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
      <p class="pagination">
        <?php if ($page > 1): ?>
        <a href="?p=<?= $page - 1 ?>">&lt; Précédent</a>
        <?php endif; ?>

        <?php for ($i = 1 ; $i <= $nb_pages ; $i++): ?>
          <a href="?p=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>

        <?php if ($page < $nb_pages): ?>
        <a href="?p=<?= $page + 1 ?>">Suivant &gt;</a>
        <?php endif; ?>
      </p>
      <footer>
        <p>Version de PHP utilisée : <?php echo phpversion(); ?></p>
      </footer>
    </div>
  </body>
</html>
