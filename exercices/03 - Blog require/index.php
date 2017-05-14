<?php require_once('content.php'); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>3 - Exercice PHP</title>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <div class="main">
      <header>
        <h1>Blog</h1>
      </header>
      <section>
        <?php foreach($posts as $post): ?>
        <article>
          <div class="left">
            <img src="<?= $post['image'] ?>" alt="Post image">
          </div>
          <div class="right">
            <h2><?= $post['title'] ?></h2>
            <div class="date"><?= date('d/m à H\hi', $post['date']) ?></div>
            <div class="content"><?= $post['content'] ?></div>
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
