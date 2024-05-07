<?php

class Users extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $rows = $x->findAll();

    $this->view('users/index', [
      'users' => $rows
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      if ($user->validate($_POST)) {

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user->insert($_POST);

        redirect('users');
      } else {
        $errors = $user->errors;
      }
    }

    $this->view('users/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $user = new User();
    $arr['id'] = $id;
    $row = $user->first($arr);

    if (count($_POST) > 0) {

      if ($user->validate($_POST)) {

        $user->update($id, $_POST);

        redirect('users');
      } else {
        $errors = $user->errors;
      }
    }

    $this->view('users/edit', [
      'user' => $row,
      'errors' => $errors
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('users');
    }

    $this->view('users/delete', [
      'user' => $row
    ]);
  }
}