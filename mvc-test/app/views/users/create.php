<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>User Registration</h2>

    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" type="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" type="password" class="form-control">
    </div>

    <button name="create" type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>