<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table            = 'film';   // Nama table yang ada di database
    protected $primarykey       = 'id';     // Nama kolom yang menjadi primary key
    protected $useAutoIncrement = true;     // Beri nilai true jika terdapat autoincrement

    // Digunakan untuk menentukan kolom mana saja yang dapat kita insert data
    protected $allowedFields      = ['nama_film', 'id_genre', 'duration', 'cover'];     
    public function getALLDataJoin()
   {
   $query = $this ->db->table('film')
   ->select("film.*, genre.nama_genre")
   ->join("genre", "genre.id = film.id_genre");
   return $query->get()->getResultArray();
   }

   public function getFilm()
   {

    $data = [
        [
            "nama_film" => "Sewu Dino",
            "id_genre"     => "Horor",
            "duration"  => "1 jam 43 menit" 
        ],
        [
            "nama_film" => "Fast And Forious X",
            "id_genre"     => "Action",
            "duration"  => "2 jam 9 menit" 
        ],
        [
            "nama_film" => "The Super Mario Bros",
            "id_genre"     => "Animasi, film komedi, petualangan, fantasi",
            "duration"  => "1 jam 23 menit" 
        ],
        [
            "nama_film" => "Pater Pan & Wendy",
            "id_genre"     => "Petualangan, komedi, fantasi",
            "duration"  => "1 jam 49 menit" 
        ],
        [
            "nama_film" => "The Little Mermaid",
            "id_genre"     => "Fantasi, roman, melodrama",
            "duration"  => "2 jam 15 menit" 
        ],
        [
            "nama_film" => "Barbie",
            "id_genre"     => "Komedi, petualangan, fantasi",
            "duration"  => "1 jam 40 menit" 
        ],
        [
            "nama_film" => "Transformer: Rise of the Beats",
            "id_genre"     => "Fiksi ilmiah, petualangan, fantasi",
            "duration"  => "2 jam 7 menit" 
        ],
        [
            "nama_film" => "Elemental: Forces of Nature",
            "id_genre"     => "Anime, petualangan, komedi",
            "duration"  => "1 jam 47 menit" 
        ],
        [
            "nama_film" => "Doraemon: Nobita's Sky Utopia",
            "id_genre"     => "Anime. petualangan, komedi",
            "duration"  => "1 jam 47 menit" 
        ],
        [
            "nama_film" => "Meitantei Konan Korugane no Sabumarin",
            "id_genre"     => "Anime, misteri, drama",
            "duration"  => "1 jam 49 menit" 
        ]
    ];

    return $data;
   }

   public function getAllData()
   {
    return $this->findAll();
   }

   public function getDataByID($id)
   {
    return $this->find($id);
   }

   public function getDataBy($data)
   {
    return $this-> where('genre', $data) -> findAll();
   }

   public function getOrderBy()
   {
    return $this->orderBy('created_at', 'decs') -> findAll();
   }

   public function getLimit()
   {
    return $this->limit(10)->findAll();
   }

}
