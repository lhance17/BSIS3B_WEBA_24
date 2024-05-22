<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">
  <h2 class="books-title">Lists of Books</h2>
</div>

<form action="<?= ROOT ?>/books/create" method="POST" enctype="multipart/form-data" class="w-50 mx-auto">
    <h2>Add Books</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <div class="mb-2">
      <label for="">Image</label>
      <input type="file" name="Picture" class="form-control">
    </div>

   

    <div class="mb-2">
      <label for="">Title</label>
      <input name="Title" value="<?= get_var('Title') ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Author</label>
      <input name="Author" value="<?= get_var('Author') ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Year_Publish</label>
      <input name="Year_Publish" value="<?= get_var('Year_Publish') ?>" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
    <class="books-table">
<table class="table table-striped-columns table-hover table-bordered table mx-auto p-2" style="width: 1000px ">
<tr>
      <th>Title</th>
      <th>Author</th>
      <th>Year Publish</th>
      <th>Image</th>
      <th></th>
    </tr>
    <?php if ($books != null) { ?>

      <?php foreach ($books as $item) { ?>
        <tr>
          <td><?= $item->Title ?></td>
          <td><?= $item->Author ?></td>
          <td><?= $item->Year_Publish ?></td>
          <td>
            <img width="50px" height="50px" src="<?= ROOT ?>/assets/uploads/books_img/<?= $item->id ?>/<?= $item->Picture ?>" alt="">
          </td>
          <td>
            <a href="<?= ROOT ?>/users/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/users/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php } ?>
<?php } ?>
<?php include PATH . "partials/footer.php" ?>