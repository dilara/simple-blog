
  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
      <?php
        $fattr = array('class' => 'form-signin');
        echo form_open(site_url().'/home/login/', $fattr);
      ?>
      <div class="form-group">
        <div class="form-label-group">
          <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
          <?php echo form_label('Email', 'email'); ?>
          <?php echo form_error('email'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="form-label-group">
          <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value'=> set_value('password'))); ?>
          <?php echo form_label('Password', 'password'); ?>
          <?php echo form_error('password'); ?>
        </div>
      </div>

      <?php echo form_submit(array('value'=>'Login', 'class'=>'btn btn-primary btn-block')); ?>
      <?php echo form_close(); ?>

      <div class="text-center">
        <a class="d-block small mt-3" href="<?php echo site_url();?>/home/register">Register an Account</a>
      </div>
    </div>
  </div>