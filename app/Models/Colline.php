<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colline extends Model
{
    use HasFactory;
    public function communes()
    {
        return  $this->hasmany(Commune::class);
    }
}
