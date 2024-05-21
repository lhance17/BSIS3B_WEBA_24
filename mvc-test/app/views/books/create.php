<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
    <h2>Add Books</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <input type="hidden" name="token">

    <div class="mb-2">
      <label for="">Image</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-2">
      <label for="">Title</label>
      <input name="title" value="<?= get_var('title') ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Author</label>
      <input name="author" value="<?= get_var('author') ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Year Published</label>
      <input name="published" value="<?= get_var('published') ?>" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>