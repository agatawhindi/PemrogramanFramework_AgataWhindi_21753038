<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    // Step 2
    protected $genre;

    // Step 3
    public function __construct()
    {
        // Step 4
        $this -> genre = new GenreModel();
    }
    
    public function index()
    {
        //dd($this -> genre -> getgenre());
        $data['data_genre'] = $this -> genre -> getGenre();
        return view("genre/index2", $data);
    }
    public function all()
    {
        //dd($this->genre ->getAllData());
        $data['semuagenre'] = $this->genre->getAllData();
        return view("genre/semuagenre", $data);
    }
}
