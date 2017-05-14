<?php require_once('tpl/header.php'); ?>

<div class="login-header">
  <?php if (!empty($user)): ?>
    <p>Bienvenue <?= $user['pseudo'] ?></p>
    <p><a href="<?= base_url('user/logout') ?>">Logout</a></p>
  <?php else: ?>
    <p><a href="<?= base_url('user/login') ?>">Login</a></p>
  <?php endif; ?>
</div>
<div class="main">
  <header>
    <h1>Blog</h1>
  </header>
  <section>
    <?php foreach($posts as $post): ?>
    <article>
      <div class="left">
        <img src="<?= $post->image ?>" alt="Post image">
      </div>
      <div class="right">
        <h2><a href="<?= base_url("article/view/$post->id") ?>"> <?= $post->title ?> </a></h2>
        <div class="date"><?= $post->date ?></div>
        <div class="content"><?= $post->content ?></div>
      </div>
    </article>
    <?php endforeach; ?>
  </section>
  <p class="pagination">
    <?= $pagination ?>
  </p>

<?php require_once('tpl/footer.php'); ?>
