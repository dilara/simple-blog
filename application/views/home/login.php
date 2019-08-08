<h2><?php echo 'Login'; ?></h2>
<div>
    <?php
      $fattr = array('class' => 'form-signin');
      echo form_open(site_url().'/home/login/', $fattr);
    ?>
    <div class="form-group">
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    <div class="form-group">
      <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value'=> set_value('password'))); ?>
      <?php echo form_error('password') ?>
    </div>
    <?php echo form_submit(array('value'=>'Login')); ?>
    <?php echo form_close(); ?>
    <p>Don't have an account? Click to <a href="<?php echo site_url();?>/home/register">Register</a></p>
</div>