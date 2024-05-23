<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" enctype="multipart/forms-data" class="w-50 mx-auto">
    <h2>Add New Book</h2>

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
      <input type="file" name="image" class="forms-control">
    </div>

    <div class="mb-2">
      <label for="">Title</label>
      <input name="Title" value="<?= get_var('Title') ?>" type="text" class="forms-control">
    </div>
    <div class="mb-2">
      <label for="">Author</label>
      <input name="Author" value="<?= get_var('Author') ?>" type="text" class="forms-control">
    </div>
    <div class="mb-2">
      <label for="">Year_Publish</label>
      <input name="Year_Publish" value="<?= get_var('Year_Publish') ?>" type="text" class="forms-control">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
    <class="books-table">

<?php include PATH . "partials/footer.php" ?>