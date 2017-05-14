<?php require_once('db.php'); ?>
<!doctype html>
<html>
  <?php require_once('head.html'); ?>
  <body>
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
