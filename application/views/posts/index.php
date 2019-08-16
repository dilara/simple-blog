<ol class="breadcrumb">
  <li class="breadcrumb-item active">Posts</li>
</ol>

<div class="dropdown" style="float:right;">
  <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Actions
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php echo anchor('posts/new', 'Create A Post', array('class' => 'dropdown-item')); ?>
  </div>
</div>

<h3>Posts</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post): ?>
    <tr>
      <td><?php echo $post['title']; ?></td>
      <td>
        <?php echo anchor('posts/'.$post['id'], 'Show', array('class' => 'btn btn-primary btn-sm')); ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>