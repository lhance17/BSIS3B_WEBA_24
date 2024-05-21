<?php

class Book extends models
{
  public function validate($data)
  {
    $this->errors = [];

    if (empty($data['Title'])) {

      $this->errors['Title'] = 'Title is required.';
    }

    if (empty($data['Author'])) {

      $this->errors['Author'] = 'Author is required.';
    }

    if (empty($data['Year Publish'])) {

        $this->errors['Year Publish'] = 'Year Publish is required.';
      
    }

    

    if (count($this->errors) == 0) {
      return true;
    }
    return false;
  }
}