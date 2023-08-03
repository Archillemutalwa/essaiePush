<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        "NOM",
        "PRENOM",
        "CODE",
        "FICHE",
        "TELEPHONE",
        "ID_PROVINCE",
        "ID_COMMUNE",
        "ID_COLLINE",
        "NOM_COOPERATIVE",
        "CATEGORY",
        "AGRICOLE",
        "ID_ETAT",
    ];
    public $timestamp=false;

    public function credit()
    {
        return  $this->belongsTo(Credit::class);
    }
    public function epargne()
    {
        return  $this->belongsTo(Epargne::class);
    }
}
