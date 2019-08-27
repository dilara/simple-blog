  <!-- Page Header -->
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Simple Blog</h1>
            <span class="subheading">A Simple Blog</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php foreach ($posts as $post): ?>
          <div class="post-preview">
            <a href="<?php echo site_url('/blog/post/'.$post['id']); ?>"">
              <h2 class="post-title">
                <?php echo $post['title']; ?>
              </h2>
              <h3 class="post-subtitle">
                <?php echo $post['title']; ?>
              </h3>
            </a>
          </div>
          <hr>
        <?php endforeach; ?>
      </div>
    </div>
  </div>