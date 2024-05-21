<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center">

    <h2>List of Books</h2>
    <a href="<?= ROOT ?>/books/create" class="btn btn-primary">Add Books</a>

  </div>

  <table class="table table-striped table-bordered mt-3">
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Year Published</th>
      <th>Image</th>
      <th></th>
    </tr>
    <?php if ($books != null) { ?>

      <?php foreach ($books as $item) { ?>
        <tr>
          <td><?= $item->title ?></td>
          <td><?= $item->author ?></td>
          <td><?= $item->published ?></td>
          <td>
            <img width="50px" height="50px" src="<?= ROOT ?>/<?= $item->image ?>" alt="">
          </td>
          <td>
            <a href="<?= ROOT ?>/books/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/books/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php } ?>

    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h2>No record found.</h2>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>

<?php include PATH . "partials/footer.php" ?>