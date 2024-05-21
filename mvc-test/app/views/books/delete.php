<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete User</h2>

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

    <input type="hidden" value="<?= $books->id ?>" name="id">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>