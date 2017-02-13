<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  //Relacion hasMany
    public function books(){
      return $this->hasMany(Book::class);
    }

    public function getNumBooksAttribute(){
      return count($this->books->where('status','public'));
    }
    public function getBooksPublicAttribute(){
      return $this->books->where('status','public');
    }
}
