<h2><?php echo $title; ?></h2>
  
<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Body</label>
    <textarea name="body"></textarea><br />

    <input type="submit" name="submit" value="Create Post" />
</form>