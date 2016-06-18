<div class="container">
  <?php foreach($blog_posts as $blog_post): ?>
    <div>
      <h2 class="blog-title"><?php print l($blog_post->title, 'node/' . $blog_post->nid); ?></h2>
      <div class="blog-description"><?php print $blog_post->body_value; ?></div>
    </div>
  <?php endforeach; ?>
</div>