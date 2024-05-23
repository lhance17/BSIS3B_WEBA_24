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

        if (count($_FILES) > 0) {

          $allowed[] = 'image/png';
          $allowed[] = 'image/jpeg';

          if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {

            $folder = 'assets/images/';
            if (!file_exists($folder)) {
              mkdir($folder, 0777, true);
            }

            $destination = $folder . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $_POST['image'] = $destination;
          }
        }

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['token'] = random_string(60);

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

  public function addbooks(){
    
   
    if (count($_POST) > 0){
      $book = new Book;
      if (!empty(basename($_FILES['Picture']['name']))){
        $_POST['Picture'] = basename($_FILES['Picture']['name']);
      }
      $book->insert($_POST);
      $lastId = $book->lastId;
      if  (!empty($_POST['Picture'])){
        $dir = 'assets/uploads/books_img/' . $lastId;
        if (!is_dir($dir)){
          mkdir($dir);
        }

        $imgFilename = $dir . '/' . $_POST['Picture'];
        $tmpName = $_FILES['Picture']['tmp_name'];
        $upload = move_uploaded_file($tmpName, $imgFilename);

        if (!$upload){
          $book->errors['Picture'] = 'Inserted but failed to upload the image';
        }
      }
     
      
    }
  }
}