<ol class="breadcrumb">
  <li class="breadcrumb-item active">Posts</li>
</ol>

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