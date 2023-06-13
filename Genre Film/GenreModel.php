<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table            = 'genre';   // Nama table yang ada di database
    protected $primarykey       = 'id';     // Nama kolom yang menjadi primary key
    protected $useAutoIncrement = true;     // Beri nilai true jika terdapat autoincrement
    protected $allowFields      = [];       // Digunakan untuk menentukan kolom mana saja yang dapat kita insert data
 
    public function getGenre(){
        $data = [
            [
                "nama_genre"    => "Horor"
            ],
            [
                "nama_genre"    => "Action"
            ],
            [
                "nama_genre"    => "Animasi"
            ],
            [
                "nama_genre"    => "Petualangan"
            ],
            [
                "nama_genre"    => "Fantasi"
            ],
            [
                "nama_genre"    => "Komedi"
            ],
            [
                "nama_genre"    => "Fiksi ilmiah"
            ],
            [
                "nama_genre"    => "Anime"
            ],
            [
                "nama_genre"    => "Misteri"
            ],
            [
                "nama_genre"    => "Drama"
            ],
            [
                "nama_genre"    => "Romantis"
            ],
            [
                "nama_genre"    => "Melodrama"
            ]
            ];
        return $data;
    }
    
    public function getAllData()
   {
    return $this->findAll();
   }
}
