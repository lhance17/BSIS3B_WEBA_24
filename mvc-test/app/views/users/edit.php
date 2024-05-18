<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Edit User</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" value="<?= $user->firstname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" value="<?= $user->lastname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" value="<?= $user->email ?>" type="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" value="<?= $user->password ?>" type="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>