<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('posts'); ?>">Posts</a>
  </li>
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('posts/'.$post['id']); ?>">Post</a>
  </li>
  <li class="breadcrumb-item active">Update the Post</li>
</ol>

<h3>Update the Post</h3>
<hr>

<?php echo form_open('posts/'.$post['id'].'/update'); ?>
  <div class="form-group">
    <?php echo form_input(array('name'=>'title', 'id'=> 'title', 'placeholder'=>'Title', 'class'=>'form-control', 'value' => $post['title'])); ?>
    <?php echo form_error('title');?>
  </div>
  <div class="form-group">
    <?php echo form_textarea(array('name'=>'body', 'id'=> 'body', 'placeholder'=>'Body', 'rows'=>'3', 'class'=>'form-control', 'value' => $post['body'])); ?>
    <?php echo form_error('body');?>
  </div>

  <?php echo form_submit(array('value'=>'Update the Post', 'class'=>'btn btn-primary')); ?>
<?php echo form_close(); ?>

<?php $this->load->view('posts/summernote'); ?>