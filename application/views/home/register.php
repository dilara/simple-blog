<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Register an Account</div>
    <div class="card-body">
      <?php
        $fattr = array('class' => 'form-signin');
        echo form_open(site_url().'/home/register', $fattr);
      ?>
      <div class="form-group">
        <div class="form-label-group">
          <?php echo form_input(array('name'=>'name', 'id'=> 'name', 'placeholder'=>'Name', 'class'=>'form-control', 'value' => set_value('name'))); ?>
          <?php echo form_label('Name', 'name'); ?>
          <?php echo form_error('name');?>
        </div>
      </div>
      <div class="form-group">
        <div class="form-label-group">
          <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
          <?php echo form_label('Email', 'email'); ?>
          <?php echo form_error('email');?>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
              <?php echo form_label('Password', 'password'); ?>
              <?php echo form_error('password') ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
              <?php echo form_label('Confirm Password', 'passconf'); ?>
              <?php echo form_error('passconf') ?>
            </div>
          </div>
        </div>
      </div>

      <?php echo form_submit(array('value'=>'Register', 'class'=>'btn btn-primary btn-block')); ?>
      <?php echo form_close(); ?>

      <div class="text-center">
        <a class="d-block small mt-3" href="<?php echo site_url();?>/home/login">Login Page</a>
      </div>
    </div>
  </div>
</div>