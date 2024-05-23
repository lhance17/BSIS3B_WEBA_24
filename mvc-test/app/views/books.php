<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center">

    <h2>List of Users Books</h2>
    <a href="<?= ROOT ?>/users/addbooks" class="btn btn-primary">Add New Book</a>

  </div>

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