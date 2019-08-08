<h2><?php echo 'Register'; ?></h2>
<div>   
  <?php 
    $fattr = array('class' => 'form-signin');
    echo form_open('/home/register', $fattr);
  ?>
  <div class="form-group">
    <?php echo form_input(array('name'=>'name', 'id'=> 'firstname', 'placeholder'=>'Name', 'class'=>'form-control', 'value' => set_value('name'))); ?>
    <?php echo form_error('name');?>
  </div>
  <div class="form-group">
    <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
    <?php echo form_error('email');?>
  </div>
  <div class="form-group">
    <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
    <?php echo form_error('password') ?>
  </div>
  <div class="form-group">
    <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
    <?php echo form_error('passconf') ?>
  </div>
  <?php echo form_submit(array('value'=>'Sign up')); ?>
  <?php echo form_close(); ?>
</div>