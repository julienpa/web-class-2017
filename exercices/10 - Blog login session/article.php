<?php
require_once('session.php');
require_once('db.php');
$id = $_GET['id'];
$post = get_article_by_id($id);

if (!empty($_POST) && !empty($_SESSION['id'])) {
  add_comment($_POST['comment'], $id, $_SESSION['id']);
}

$comments = get_comments_by_article($id);
?>
<!doctype html>
<html>
  <?php require_once('head.html'); ?>
  <body>
    <div class="main">
      <header>
        <h1>Blog - article</h1>
      </header>
      <section>
        <?php if (empty($post)): ?>
          <article>Cet article n'existe pas</article>
        <?php else: ?>
          <article>
            <div class="left">
              <img src="<?= $post->image ?>" alt="Post image">
            </div>
            <div class="right">
              <h2><?= $post->title ?></h2>
              <div class="date"><?= $post->date ?></div>
              <div class="content"><?= $post->content ?></div>
            </div>
          </article>
        <?php endif; ?>
        <div class="comments">
          <h3>Liste de commentaires :</h3>
          <?php if (empty($comments)): ?>
            <p><em>Pas de commentaires sur cet article</em></p>
          <?php else: ?>
            <?php foreach($comments as $comment): ?>
              <p><?= $comment->pseudo.' : '.$comment->text ?></p>
            <?php endforeach; ?>
          <?php endif; ?>

          <h3>Nouveau commentaire :</h3>
          <?php if (empty($_SESSION['id'])): ?>
            <p>Vous devez être connecté pour poster un commentaire : <a href="/exo9/login">login</a></p>
          <?php else: ?>
          <form class="" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
            <textarea name="comment" rows="5" cols="50" placeholder="Commentaire"></textarea>
            <input type="submit" name="submit" value="Envoyer comm">
          </form>
          <?php endif; ?>
        </div>
      </section>
      <footer>
        <p>Version de PHP utilisée : <?php echo phpversion(); ?></p>
      </footer>
    </div>
  </body>
</html>
