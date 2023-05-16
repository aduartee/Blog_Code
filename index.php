<?php
include_once("template/header.php");

?>

<body>
  <main>
    <div id="title-container">
      <h1>The Dev Diary</h1>
      <p>Blog sobre programação</p>
    </div>
    <div id="posts-container">
      <?php foreach ($posts as $post) : ?>
        <div class="post-box">
          <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
          <h2 href="<? $BASE_URL ?>post.php?id<?= $post['id'] ?>" class="post-title" alt="<?= $post['title'] ?>"></h2>
          <p class="post-description"><?= $post['description'] ?> </p>
          <div class="tags-container"></div>
          <?php foreach ($post['tags'] as $tag) : ?>
            <a href="#"><?= $tag ?> </a>
          <?php endforeach ?>
        </div>
      <?php endforeach ?>
    </div>

  </main>

  <?php
  include_once("template/footer.php");
  ?>