<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['title','author_id','amount'];

    App\Author::create([
    					'title' => 'Coba',
    					'author_id' => '1',
    					'amount' => '20300'
    				]);


    public function book()
    {
    	return $this->hasMany('App\Book');
    }
}
