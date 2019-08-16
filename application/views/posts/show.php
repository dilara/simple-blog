<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('posts'); ?>">Posts</a>
  </li>
  <li class="breadcrumb-item active">Post</li>
</ol>

<div class="dropdown" style="float:right;">
  <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Actions
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php echo anchor('posts/'.$post['id'].'/edit', 'Edit', array('class' => 'dropdown-item')); ?>
    <?php echo anchor('posts/'.$post['id'].'/delete', 'Delete', array('class' => 'dropdown-item')); ?>
  </div>
</div>

<h3><?php echo $post['title']; ?></h3>
<hr>
<div class="main">
  <p><?php echo $post['body']; ?></p>
</div>