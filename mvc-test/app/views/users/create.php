<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>User Registration</h2>

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
      <input name="firstname" value="<?= get_var('firstname') ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" value="<?= get_var('lastname') ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" value="<?= get_var('email') ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" value="<?= get_var('password') ?>" type="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>