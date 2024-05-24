<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete Book</h2>

    <div class="mb-2">
      <label for="">Title</label>
      <input name="Title" disabled value="<?= $book->Title ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Author</label>
      <input name="Author" disabled value="<?= $book->Author ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Year_Publish</label>
      <input name="Year_Publish" disabled value="<?= $book->Year_Publish ?>" type="text" class="form-control">
    </div>
    

    <input type="hidden" value="<?= $book->id ?>" name="id">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>