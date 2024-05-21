<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Edit Book</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>


    <div class="mb-2">
      <label for="">Title</label>
      <input name="title" disabled value="<?= $books->title ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Author</label>
      <input name="author" disabled value="<?= $books->author ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Year Published</label>
      <input name="published" disabled value="<?= $books->published ?>" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>