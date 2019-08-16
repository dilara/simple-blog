<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('posts'); ?>">Posts</a>
  </li>
  <li class="breadcrumb-item active">Post</li>
</ol>

<h2><?php echo $post['title']; ?></h2>
<hr>
<div class="main">
  <p><?php echo $post['body']; ?></p>
</div>