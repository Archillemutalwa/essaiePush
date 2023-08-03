<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        "MONTANT",
        "GARANTI",
    	"REVENUE_SOURCE"
    ];

    public function clients()
    {
        return  $this->hasmany(Client::class);
    }
}
