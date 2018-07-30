<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable =['name'];

    App\Author::create(['name' => 'Coba']);

    public function author()
    {
    	return $this->belongsTo('App\Author');
    }
}
