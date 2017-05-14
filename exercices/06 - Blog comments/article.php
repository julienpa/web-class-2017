<?php
if (file_exists('comment.json')) {
  $file_content = file_get_contents('comment.json');
  $data = json_decode($file_content);
}
else {
  $data = [];
}
$comments = $data;

if (!empty($_POST)) {
  unset($_POST['submit']);
  $comments[] = (object) $_POST;
  $json = json_encode($comments);
  file_put_contents('comment.json', $json);
}

require_once('content.php');
$id = $_GET['id'];
if (empty($posts[$id])) {
  $post = null;
}
else {
  $post = $posts[$id];
}
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
              <div class="date"><?= $post->get_nice_date() ?></div>
              <div class="content"><?= $post->content ?></div>
            </div>
          </article>
        <?php endif; ?>
        <div class="comments">
          <h3>Liste de commentaires :</h3>
          <?php foreach($comments as $comment): ?>
            <p><?= $comment->pseudo.' : '.$comment->comment ?></p>
          <?php endforeach; ?>
          <h3>Nouveau commentaire :</h3>
          <form class="" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
            <input type="text" name="pseudo" placeholder="Pseudo" value="">
            <textarea name="comment" rows="5" cols="50" placeholder="Commentaire"></textarea>
            <input type="submit" name="submit" value="Envoyer comm">
          </form>
        </div>
      </section>
      <footer>
        <p>Version de PHP utilisée : <?php echo phpversion(); ?></p>
      </footer>
    </div>
  </body>
</html>
