<?php require_once('tpl/header.php'); ?>

<div class="login-header">
  <p><a href="<?= base_url('accueil') ?>">Accueil</a></p>
</div>
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
    <?php if (empty($user)): ?>
      <p>Vous devez être connecté pour poster un commentaire : <a href="<?= base_url('user/login') ?>">login</a></p>
    <?php else: ?>
    <form class="" action="<?= base_url('article/add_comment/'.$post->id) ?>" method="post">
      <textarea name="comment" rows="5" cols="50" placeholder="Commentaire"></textarea>
      <input type="submit" name="submit" value="Envoyer comm">
    </form>
    <?php endif; ?>
  </div>
</section>

<?php require_once('tpl/footer.php'); ?>
