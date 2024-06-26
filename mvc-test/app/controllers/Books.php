<?php

class Books extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
      redirect('login');
    }

    $x = new Book();
    $rows = $x->findAll();

    $this->view('books', [
      'books' =>  $rows
    ]);
  }

  public function create(){
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

      if (count($book->errors) > 0){
        $this->view('books', [
          'err' => $book->errors
        ]);
      }
      else {
        redirect('books'); 
      }
    }
  }
  public function editbook($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $user = new Book();
    $arr['id'] = $id;
    $row = $book->first($arr);

    if (count($_POST) > 0) {

      if ($book->validate($_POST)) {

        $book->update($id, $_POST);

        redirect('books');
      } else {
        $errors = $book->errors;
      }
    }

    $this->view('users/editbook', [
      'book' => $row,
      'errors' => $errors
    ]);
  }

  public function deletebook($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new Book();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->deletebook($id);

      redirect('books');
    }

    $this->view('users/deletebook', [
      'book' => $row
    ]);
  }
}