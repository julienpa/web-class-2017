<?php require_once('content.php'); ?>
<!doctype html>
<html>
  <?php require_once('head.html'); ?>
  <body>
    <div class="main">
      <header>
        <h1>Blog</h1>
      </header>
      <section>
        <?php foreach($posts as $i => $post): ?>
        <article>
          <div class="left">
            <img src="<?= $post->image ?>" alt="Post image">
          </div>
          <div class="right">
            <h2><a href="article.php?id=<?= $i ?>"> <?= $post->title ?> </a></h2>
            <div class="date"><?= $post->get_nice_date() ?></div>
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
